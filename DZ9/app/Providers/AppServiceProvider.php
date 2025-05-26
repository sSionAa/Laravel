<?php

namespace App\Providers;

use App\Events\NewsHidden;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        //
        // NewsHidden::listen( News::class, SendShipmentNotification::class, );
        \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::except([
            '/news/*/hide',
            '/news/*/*'
        ]);
        //
    }
}
