<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class KeydownEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;
    public $id;
      public $name;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
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
