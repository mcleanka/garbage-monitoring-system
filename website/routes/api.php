<?php

use App\Http\Controllers\BinLogController;
use Illuminate\Support\Facades\Route;

Route::get("/bin-log/save", [BinLogController::class, 'save'])
    ->middleware('guest');