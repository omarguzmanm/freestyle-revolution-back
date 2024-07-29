<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TournamentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('/auth/register', [AuthController::class, 'create'])->name('register');
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/tournaments', TournamentController::class);
    Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');
});
