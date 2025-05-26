<?php

namespace App\Console;

use App\Console\Commands\ClearLogs;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->job(new ClearLogs())->everyMinute(); // Например, ежедневно
        $schedule->commands('logs:clear')->everyMinute();
    }
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . 'Console/Commands');

        require base_path(__DIR__ . 'Console/Commands');
    }
}