<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Feed\FeedController;
use App\Http\Controllers\List\ListController;
use App\Http\Controllers\Trending\TrendingController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ViewedItems\ViewedItemsController;
use App\Http\Controllers\Welcome\WelcomeController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Tmdb;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('welcome');

Route::get('dashboard', DashboardController::class)->name('dashboard');

Route::get('trending', TrendingController::class)->name('trending.index');

Route::get('viewed', ViewedItemsController::class)->name('viewed.index');

Route::get('feed', FeedController::class)->name('feed.index');

Route::get('lists/{uuid}', ListController::class)->name('wishlists.show');

Route::redirect('settings', 'settings/profile');

Route::get('settings/profile', Profile::class)->name('settings.profile');
Route::get('settings/password', Password::class)->name('settings.password');
Route::get('settings/the-movie-database-token', Tmdb::class)->name('settings.tmdb');
Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

Route::prefix('/@{username}')->group(function () {
    Route::get('/', UserController::class)->name('profile.show');
});

require __DIR__.'/auth.php';
