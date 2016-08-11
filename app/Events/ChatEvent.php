<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChatEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;
    public $chatdata;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($chatdata,$user)
    {
        $this->chatdata=$chatdata;
        $this->user=$user;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['message'];
    }
}
