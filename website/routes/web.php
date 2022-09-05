<?php

use App\Http\Controllers\BinController;
use App\Http\Controllers\BinLogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(["middleware" => "auth"], function () {
    Route::resource("/dashboard", DashboardController::class)
        ->names('dashboard');
    Route::resource("/bin", BinController::class)
        ->names('bin');
    Route::resource("/bin-logs", BinLogController::class)
        ->names('bin-log');
    Route::resource("/notification", NotificationController::class)
        ->names('notify');

    Route::get("/my-profile/{id}", [UserController::class, 'show'])->name('profile');

    Route::resource("/user", UserController::class)
        ->names('user');
});

require __DIR__ . '/auth.php';
