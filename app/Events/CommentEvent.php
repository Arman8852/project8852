<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CommentEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;
    public $remarkdata;
    public $id;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($remarkdata,$id)
    {
        $this->remarkdata=$remarkdata;
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
