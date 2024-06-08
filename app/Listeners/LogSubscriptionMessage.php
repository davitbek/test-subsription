<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Support\Facades\Log;

class LogSubscriptionMessage
{
    public function handle(SubmissionSaved $event): void
    {
        $submission = $event->getSubmission();
        // TODO better to store in database or same named log file
        $message = sprintf('New submission with id=%s saved successfully at %s', $submission->id, $submission->created_at);
        Log::info($message, $submission->only('name', 'email'));
    }
}
