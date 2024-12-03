<?php

namespace App\Listeners;

use App\Events\ShortUrlCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendShortUrlNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ShortUrlCreated $event): void
    {
        //
        Log::info("ShortUrl created listener ", [
            $event->getShortUrl(),
        ]);
    }
}
