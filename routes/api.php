<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Auth
Route::post('auth/register', [AuthController::class, 'register']);
