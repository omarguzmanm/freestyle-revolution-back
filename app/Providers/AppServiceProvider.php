<?php

namespace App\Providers;

use App\Policies\TournamentPolicy;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('view-tournaments', [TournamentPolicy::class, 'view']);
        Gate::define('create-tournament', [TournamentPolicy::class, 'create']);
    }
}
