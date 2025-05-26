<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Foundation\Support\Providers\AuthServiceProvider;
use App\Models\User;
use App\Policies\UserPolicy;



class AppServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
    ];

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
    public function boot()
    {
        //
        //$this->registerPolicies();
    }

}