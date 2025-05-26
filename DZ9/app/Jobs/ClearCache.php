<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ClearCache implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    protected $post;

    public function __construct(ClearCache $post)
    {
        //$this->post = $post;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        file_put_contents(storage_path('storage/logs/laravel.log'), '');
    }
}
