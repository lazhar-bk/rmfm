<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StreamUrlController;
use App\Http\Controllers\StreamcheduleController;
use App\Http\Controllers\StreamUpcomingController;

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

Route::prefix('/stream')->group(function () {
    Route::get('/url', [StreamUrlController::class, 'index']);
    Route::get('/schedule', [StreamScheduleController::class, 'index']);
    Route::get('/upcoming', [StreamUpcomingController::class, 'index']);
});
