<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
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
        Route::bind('username', fn (string $username): User => User::where(DB::raw('LOWER(username)'), mb_strtolower($username))->firstOrFail());
    }
}
