<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Auth::provider('etudiants', function ($app, array $config) {
            return new EloquentUserProvider($app['hash'], $config['model']);
        });

        Auth::provider('enseignants', function ($app, array $config) {
            return new EloquentUserProvider($app['hash'], $config['model']);
        });

        Auth::provider('peres', function ($app, array $config) {
            return new EloquentUserProvider($app['hash'], $config['model']);
        });

        Auth::provider('administrateurs', function ($app, array $config) {
            return new EloquentUserProvider($app['hash'], $config['model']);
        });
    }
}
