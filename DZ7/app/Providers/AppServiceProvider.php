<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\View\View;
use App\View\Resources\Components\Render;

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

        //$this->render = new Render('User', 'components.user');

        VerifyCsrfToken::except([
            '/user',
            '/user/*',
            '/store-user',
            '/resume',
            '/resume/*',
        ]);
    }
}
