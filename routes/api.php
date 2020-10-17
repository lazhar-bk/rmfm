<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StreamingUrlController;
use App\Http\Controllers\StreamingScheduleController;
use App\Http\Controllers\StreamingUpcomingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/streaming')->group(function () {
    Route::get('/url', [StreamingUrlController::class, 'index']);
    Route::get('/schedule', [StreamingScheduleController::class, 'index']);
    Route::get('/upcoming', [StreamingUpcomingController::class, 'index']);
});
