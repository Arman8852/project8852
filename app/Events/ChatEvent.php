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
    public $id;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($chatdata,$user,$id)
    {
        $this->chatdata=$chatdata;
        $this->user=$user;
        $this->id=$id;
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
