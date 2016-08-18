<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LikeEvent extends Event implements ShouldBroadcast
{

    use SerializesModels;
     public $id;
     public $count;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($id,$count)
    {
        $this->id=$id;
        $this->count=$count;
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
