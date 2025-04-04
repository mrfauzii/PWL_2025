<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman Products dengan prefix category
Route::prefix("/category")->group(function () {
    Route::get("/food-beverage", [ProductController::class, 'foodNbeverage']);
    Route::get("/beauty-health", [ProductController::class, 'beautyHealth']);
    Route::get("/home-care", [ProductController::class, 'homeCare']);
    Route::get("/baby-kid", [ProductController::class, 'babyKid']);
});

// Halaman User dengan parameter ID dan Name
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Halaman Penjualan
Route::get('/sales', [SalesController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
