<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;


class ChatEvent implements ShouldBroadcastNow
{
    use SerializesModels;

    public $eventData;

    /**
     * Create a new event instance.
     *
     * @param  array  $eventData
     * @return void
     */
    public function __construct($eventData)
    {
        $this->eventData = $eventData;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        $senderType = $this->eventData['sender_type'];
        $senderId = $this->eventData['sender_id'];
        $receiverType = $this->eventData['receiver_type'];
        $receiverId = $this->eventData['receiver_id'];

        $channels = [];

        if ($senderType === 'employer' && $receiverType === 'job_seeker') {
            $channels[] = 'chat-channel-employer-' . $senderId . '-jobseeker-' . $receiverId;
        } elseif ($senderType === 'job_seeker' && $receiverType === 'employer') {
            $channels[] = 'chat-channel-jobseeker-' . $senderId . '-employer-' . $receiverId;
        } elseif ($senderType === 'employer' && $receiverType === 'employer') {
            $channels[] = 'chat-channel-employer-' . $senderId . '-employer-' . $receiverId;
        } elseif ($senderType === 'job_seeker' && $receiverType === 'job_seeker') {
            $channels[] = 'chat-channel-jobseeker-' . $senderId . '-jobseeker-' . $receiverId;
        }

        return $channels;
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        $eventData = $this->eventData;
        $eventData['id'] = $this->message->id;

        return $eventData;
    }

}
