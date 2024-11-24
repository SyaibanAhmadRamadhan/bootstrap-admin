<?php

use App\Http\Controllers\AccountController;
use App\Http\Middleware\PermissionRole;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return view('errors.404');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::get('/account/setting', [AccountController::class, 'setting'])->name('account.setting');
    Route::put('/account/{user}', [AccountController::class, 'update'])->name('account.update');
});

require __DIR__ . '/auth.php';
