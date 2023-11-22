<!-- blade template -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include Axios and your JavaScript file -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open To SASS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@400;500;600;700&family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" integrity="sha512-arEjGlJIdHpZzNfZD2IidQjDZ+QY9r4VFJIm2M/DhXLjvvPyXFj+cIotmo0DLgvL3/DOlIaEDwzEiClEPQaAFQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.0/dist/echo.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
  
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;
  
      var pusher = new Pusher('375a6733639011335ca3', {
        cluster: 'ap2'
      });
  
      var channel = pusher.subscribe('chat_sys');
      channel.bind('chat_syss', function(data) {
        alert(JSON.stringify(data));
      });
    </script>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
        <div id="message-container">
            <div id="message-list">
                <input type="hidden" id="receiver-type" value="employer">
                <input type="hidden" id="receiver-id" value="2">
                <!-- Messages will be dynamically added here -->
            </div>
            @php
            $senderType = session()->has('employer_session') ? 'employer' : (session()->has('seeker_session') ? 'jobseeker' : 'error');
            $senderId = session()->get('employer_session', session()->get('seeker_session', 'error'));
            @endphp
            <div id="input-container">
                <input type="text" id="message-input" placeholder="Type your message">
                <button id="send-button" data-senderType="{{ $senderType }}" data-senderid="{{ $senderId }}">Send</button>
            </div>
        </div>
    </div>

    <script>
        // Add your JavaScript code here to handle sending and receiving messages
        // You can use Axios to make HTTP requests to your Laravel backend

        const messageList = document.getElementById('message-list');
        const messageInput = document.getElementById('message-input');
        const sendButton = document.getElementById('send-button');

        // Function to display a new message in the message list
        function displayMessage(message) {
            const messageItem = document.createElement('div');
            messageItem.classList.add('message-item');
            messageItem.textContent = message;
            messageList.appendChild(messageItem);
        }

        // Function to send a message when the send button is clicked
        function sendMessage() {
            const message = messageInput.value;

            // Get the senderType and senderId from the send button attributes
            const senderType = sendButton.getAttribute('data-senderType');
            const senderId = sendButton.getAttribute('data-senderid');

            // Get the receiverType and receiverId from the selected user
            const receiverType = document.getElementById('receiver-type').value;
            const receiverId = document.getElementById('receiver-id').value;

            // Send the message to the server
            axios.post('/send-message', {
                sender_type: senderType,
                sender_id: senderId,
                receiver_type: receiverType,
                receiver_id: receiverId,
                message: message
            })
            .then((response) => {
                console.log(response.data);
                // Clear the input field after sending the message
                messageInput.value = '';
            })
            .catch((error) => {
                console.log(error);
            });
        }

        // Event listener for the send button click event
        sendButton.addEventListener('click', sendMessage);

        // Function to listen for chat events using Laravel Echo
        function listenForChatEvents() {
            // Get the senderType and senderId from the session
            const senderType = sendButton.getAttribute('data-senderType');
            const senderId = sendButton.getAttribute('data-senderid');

            // Subscribe to the chat channel
            const channelName = getChatChannelName(senderType, senderId);
            const channel = window.Echo.channel(channelName);

            channel.listen('.chat-event', (data) => {
                console.log(data);
                // Display the received message in the message list
                displayMessage(data.message);
            });
        }

        // Function to generate the chat channel name
        function getChatChannelName(senderType, senderId) {
            const receiverType = document.getElementById('receiver-type').value;
            const receiverId = document.getElementById('receiver-id').value;

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

        // Call the function to listen for chat events
        listenForChatEvents();
    </script>
</body>
</html>
