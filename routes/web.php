<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WecolmeController::class, 'index'])->name('shop-index');

Route::get('/product/{productNameVariable}/{productPrice}', [\App\Http\Controllers\WecolmeController::class, 'product'])->name('product-page');

// Define all possible routes for our shop, customer side not admin panel
// create all possible migrations and define tables and columns : php artisan make:migration create_users_table
// create factory for one table
