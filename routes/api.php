<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\AttendeeController;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/login', function () {
    return 'Login Page';
})->name('login');

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::apiResource('events', EventController::class);
Route::apiResource('events.attendees', AttendeeController::class)
    ->scoped()->except(['update']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource('events', EventController::class);
//     Route::apiResource("events.attendees", AttendeeController::class)
//         ->scoped()
//         ->except(['index', 'show', 'update']);
// });