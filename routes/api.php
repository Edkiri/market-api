<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Auth
Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);
