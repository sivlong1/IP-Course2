<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CategoryController::class)->prefix('categories')->group(function(){
    Route::get('/', 'getCategories');
    Route::post("/", 'createCategory');
    Route::get("/{categoryId}", 'getCategory');
    Route::patch("/{categoryId}", 'updateCategory');
    Route::delete("/{categoryId}", 'deleteCategory');
});

Route::controller(ProductController::class)->prefix('products')->group(function(){
    Route::get('/', 'getProducts');
    Route::post("/", 'createProduct');
    Route::get("/{productId}", 'getProduct');
    Route::patch("/{productId}", 'updateProduct');
    Route::delete("/{productId}", 'deleteProduct');
});