<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\MainController as GuestMainController;
use App\Http\Controllers\Guest\NewsController;

Route::prefix('')->as('guest.')->group(function () {
    Route::get('/', [GuestMainController::class, 'home'])->name('home');

    // Actualités
    Route::prefix('actualites/')->as('news.')->group(function () {
        Route::get('', [NewsController::class, 'index'])->name('index');

        Route::get('show', [NewsController::class, 'show'])->name('show');
    });
});
