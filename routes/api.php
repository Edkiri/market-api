<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

// Auth
Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);

// User
Route::get('user/my-profile', [UserController::class, 'getProfile'])->middleware('auth:sanctum');
Route::put('user', [UserController::class, 'updateProfile'])->middleware('auth:sanctum');

// Categories
Route::get('category', [CategoryController::class, 'findAll']);
Route::post('category', [CategoryController::class, 'create'])->middleware(['auth:sanctum', 'is-admin']);

// Products
Route::get('product', [ProductController::class, 'findAll']);
Route::post('product', [ProductController::class, 'create'])->middleware(['auth:sanctum', 'is-admin']);

// Sales
Route::post('sale', [SaleController::class, 'create'])->middleware(['auth:sanctum']);
Route::get('sale', [SaleController::class, 'findByUser'])->middleware(['auth:sanctum']);
