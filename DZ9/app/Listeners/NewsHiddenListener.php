<?php

namespace App\Listeners;

//use App\Events\log;
//use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewsHiddenListener
{
    /**
     * Create the event listener.
     */
    public function __construct($event)
    {
        //
        Log::info('News' . $event->news->id . 'hidden');
    }

    /**
     * Handle the event.
     */
    public function handle($event): void
     {
         //
         Log::info('News' . $event->news->id . 'hidden');
     }
}
