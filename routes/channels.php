<?php
use App\Broadcasting\ReportCreated;
use App\Broadcasting\ReportCompleted;
use App\User;

Broadcast::channel('user.*', function (User $user) {
        return Auth::check();
});

Broadcast::channel('reportCompleted.{report}', ReportCompleted::class);
Broadcast::channel('newReport.{report}' , ReportCreated::class);
