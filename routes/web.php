<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);

Route::get('/add-product', [ProductController::class, 'create']);
Route::post('/add-product', [ProductController::class, 'store']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::post('/product/delete/{id}', [ProductController::class, 'destroy']);