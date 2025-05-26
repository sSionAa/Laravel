<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ClearLogs extends Command
{
    protected $signature = 'logs:clear';
    protected $description = 'Clear the application log file';

    public function handle()
    {
        $logPath = storage_path('logs/laravel.log');

        if (File::exists($logPath)) {
            File::put($logPath, ''); // Очищаем файл лога
            $this->info('Log file cleared successfully.');
        } else {
            $this->error('Log file does not exist.');
        }
    }
}