// import './bootstrap';
import Echo from 'laravel-echo';
import axios from 'axios';

window.Pusher = require('pusher-js');

// Configure Pusher with your credentials
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true
});

// Subscribe to the appropriate chat channel and listen for chat events
function subscribeToChatChannel() {
    const senderType = sessionStorage.getItem('senderType');
    const senderId = sessionStorage.getItem('senderId');
    const receiverType = document.getElementById('receiver-type').value;
    const receiverId = document.getElementById('receiver-id').value;

    const channelName = getChatChannelName(senderType, senderId, receiverType, receiverId);

    window.Echo.channel(channelName)
        .listen('.chat-event', (data) => {
            console.log(data);
            // Handle received chat message and update UI
            displayMessage(data.message);
        });
}

// Generate the chat channel name based on the sender and receiver details
function getChatChannelName(senderType, senderId, receiverType, receiverId) {
    let channelName = '';

    if (senderType === 'employer' && receiverType === 'job_seeker') {
        channelName = `chat-channel-employer-${senderId}-jobseeker-${receiverId}`;
    } else if (senderType === 'job_seeker' && receiverType === 'employer') {
        channelName = `chat-channel-jobseeker-${senderId}-employer-${receiverId}`;
    } else if (senderType === 'employer' && receiverType === 'employer') {
        channelName = `chat-channel-employer-${senderId}-employer-${receiverId}`;
    } else if (senderType === 'job_seeker' && receiverType === 'job_seeker') {
        channelName = `chat-channel-jobseeker-${senderId}-jobseeker-${receiverId}`;
    }

    return channelName;
}

// Send a chat message
function sendMessage(message) {
    const senderType = sessionStorage.getItem('senderType');
    const senderId = sessionStorage.getItem('senderId');
    const receiverType = document.getElementById('receiver-type').value;
    const receiverId = document.getElementById('receiver-id').value;

    axios.post('/send-message', {
        sender_type: senderType,
        sender_id: senderId,
        receiver_type: receiverType,
        receiver_id: receiverId,
        message: message
    })
        .then((response) => {
            console.log(response.data);
        })
        .catch((error) => {
            console.log(error);
        });
}

// Fetch chat messages
function getMessages() {
    const senderType = sessionStorage.getItem('senderType');
    const senderId = sessionStorage.getItem('senderId');
    const receiverType = document.getElementById('receiver-type').value;
    const receiverId = document.getElementById('receiver-id').value;

    axios.get('/messages', {
        params: {
            sender_type: senderType,
            sender_id: senderId,
            receiver_type: receiverType,
            receiver_id: receiverId
        }
    })
        .then((response) => {
            console.log(response.data.messages);
            // Update UI with received messages
            response.data.messages.forEach((message) => {
                displayMessage(message.content);
            });
        })
        .catch((error) => {
            console.log(error);
        });
}

// Example usage
const sendButton = document.getElementById('send-button');
const messageInput = document.getElementById('message-input');
const messageList = document.getElementById('message-list');

// Function to display a new message in the message list
function displayMessage(message) {
    const messageItem = document.createElement('div');
    messageItem.classList.add('message-item');
    messageItem.textContent = message;
    messageList.appendChild(messageItem);
}

// Function to send a message when the send button is clicked
function handleSendMessage() {
    const message = messageInput.value;
    sendMessage(message);
    messageInput.value = '';
}

// Event listener for the send button click event
sendButton.addEventListener('click', handleSendMessage);

// Call the function to subscribe to the chat channel and fetch messages
subscribeToChatChannel();
getMessages();
