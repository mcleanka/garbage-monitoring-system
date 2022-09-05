<?php

use App\Http\Controllers\BinLogController;
use Illuminate\Support\Facades\Route;

Route::post("/bin-log/store", [BinLogController::class, 'store']);
