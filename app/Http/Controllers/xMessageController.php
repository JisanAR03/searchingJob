<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\JobSeeker;
use App\Models\Message;

class MessageController extends Controller
{
    public function developerlook_index()
    {
        $user = auth()->user();

        if ($user instanceof Employer) {
            $conversations = Message::where('sender_type', 'employer')
                ->where('sender_id', $user->id)
                ->where('receiver_type', 'job_seeker')
                ->orderBy('created_at', 'desc')
                ->get();
        } elseif ($user instanceof JobSeeker) {
            $conversations = Message::where('sender_type', 'job_seeker')
                ->where('sender_id', $user->id)
                ->where('receiver_type', 'employer')
                ->orderBy('created_at', 'desc')
                ->get();
        }

        return view('messages.index', compact('conversations'));
    }

    public function developerlook_show($receiverId)
    {
        $user = auth()->user();

        if ($user instanceof Employer) {
            $senderType = 'employer';
            $receiverType = 'job_seeker';
        } elseif ($user instanceof JobSeeker) {
            $senderType = 'job_seeker';
            $receiverType = 'employer';
        }

        $conversation = Message::where('sender_type', $senderType)
            ->where('sender_id', $user->id)
            ->where('receiver_type', $receiverType)
            ->where('receiver_id', $receiverId)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('messages.show', compact('conversation', 'receiverId'));
    }

    public function developerlook_store(Request $request)
    {
        $user = auth()->user();

        if ($user instanceof Employer) {
            $senderType = 'employer';
            $receiverType = 'job_seeker';
        } elseif ($user instanceof JobSeeker) {
            $senderType = 'job_seeker';
            $receiverType = 'employer';
        }

        $message = new Message();
        $message->sender_type = $senderType;
        $message->sender_id = $user->id;
        $message->receiver_type = $receiverType;
        $message->receiver_id = $request->receiver_id;
        $message->message = $request->message;
        $message->save();

        return redirect()->route('messages.show', $request->receiver_id);
    }
}
