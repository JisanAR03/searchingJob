<?php
namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request)
    {
        $senderType = $request->input('sender_type');
        $senderId = $request->input('sender_id');
        $receiverType = $request->input('receiver_type');
        $receiverId = $request->input('receiver_id');
        $messageText = $request->input('message');

        // Save the message to the database
        $message = new Message();
        $message->sender_type = $senderType;
        $message->sender_id = $senderId;
        $message->receiver_type = $receiverType;
        $message->receiver_id = $receiverId;
        $message->content = $messageText; // Update the field name to 'content'
        $message->save();

        $eventData = [
            'sender_type' => $senderType,
            'sender_id' => $senderId,
            'receiver_type' => $receiverType,
            'receiver_id' => $receiverId,
            'message_id' => $message->id // Pass the message ID to the event
        ];

        event(new ChatEvent($eventData));

        return response()->json(['status' => 'Message sent']);
    }

    public function getMessages(Request $request)
    {
        $senderType = $request->input('sender_type');
        $senderId = $request->input('sender_id');
        $receiverType = $request->input('receiver_type');
        $receiverId = $request->input('receiver_id');

        // Fetch messages from the database based on sender and receiver IDs
        $messages = Message::where(function ($query) use ($senderType, $senderId, $receiverType, $receiverId) {
            $query->where('sender_type', $senderType)
                ->where('sender_id', $senderId)
                ->where('receiver_type', $receiverType)
                ->where('receiver_id', $receiverId);
        })->orWhere(function ($query) use ($senderType, $senderId, $receiverType, $receiverId) {
            $query->where('sender_type', $receiverType)
                ->where('sender_id', $receiverId)
                ->where('receiver_type', $senderType)
                ->where('receiver_id', $senderId);
        })->orderBy('created_at', 'asc')->get();

        return response()->json(['messages' => $messages]);
    }
}
