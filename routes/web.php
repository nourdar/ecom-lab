<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WecolmeController::class, 'index'])->name('shop-index');

Route::get('/product/{productNameVariable}/{productPrice}', [\App\Http\Controllers\WecolmeController::class, 'product'])->name('product-page');

// Define all possible routes for our shop, customer side not admin panel
// create all possible migrations and define tables and columns : php artisan make:migration create_users_table
// create factory for one table
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;

Route::resource('categories', CategoryController::class);
Route::resource('brands', BrandController::class);
Route::resource('products', ProductController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);
Route::resource('order-details', OrderDetailController::class);
Route::resource('roles', RoleController::class);

Route::get('shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('shop/product/{slug}', [ShopController::class, 'show'])->name('shop.product.show');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/categories', AdminCategoryController::class);
    Route::resource('admin/brands', AdminBrandController::class);
    Route::resource('admin/products', AdminProductController::class);
    Route::resource('admin/orders', AdminOrderController::class);
});

Route::post('products/{product}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('order/{order}/payment', [PaymentController::class, 'show'])->name('payment.show');
Route::post('order/{order}/payment', [PaymentController::class, 'process'])->name('payment.process');
