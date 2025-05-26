<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('logs:clear', function () {
    $logPath = storage_path('logs/laravel.log');

        if (File::exists($logPath)) {
            File::put($logPath, ''); // Очищаем файл лога
            $this->info('Log file cleared successfully.');
        } else {
            $this->error('Log file does not exist.');
        }
})->purpose('Clear Log')->everyMinute();