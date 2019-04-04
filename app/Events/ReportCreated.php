<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ReportCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     * @param $report
     * @param $user
     *
     * @return void
     */
    public $report;
    public $user;
    public function __construct($report)
    {
        //
        $this->report = $report;
    }

    /**
    * Get the channels the event should broadcast on.
    *
    * @return \Illuminate\Broadcasting\Channel|array
    */

    public function broadcastOn()
    {
        return new Channel('newReport');
    }

    public function broadcastAs(){
        return 'report-created';
    }

    public function broadcastWith()
    {
        return ['report'=>$this->report];
    }
}
