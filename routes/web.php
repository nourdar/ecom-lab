<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function(){
    return view ('shop.index');
});
*/

//Route::get('/', [\App\Http\Controllers\WecolmeController::class, 'index'])->name('home');
//Route::get('/about', [\App\Http\Controllers\WecolmeController::class, 'about'])->name('about');
//Route::get('/contact', [\App\Http\Controllers\WecolmeController::class, 'contact'])->name('contact');
//Route::post('/contact', [\App\Http\Controllers\WecolmeController::class, 'submitContactForm'])->name('contact.submit');
//Route::get('/product?{productNameVariable}?{productDescr}?{productPrice}', [\App\Http\Controllers\WecolmeController::class, 'product'])->name('product-page');
Route::get('/', [\App\Http\Controllers\WecolmeController::class, 'index'])->name('shop-index');
//Route to generate product for DB
Route::get('/product/{id}', [\App\Http\Controllers\WecolmeController::class, 'product'])->name('product-page');
Route::get('/product/generate/{count}', [\App\Http\Controllers\ProductController::class, 'generate'])->name('generate-products');
Route::get('/about', [\App\Http\Controllers\WecolmeController::class, 'about'])->name('about-page');
Route::get('/contact', [\App\Http\Controllers\WecolmeController::class, 'contact'])->name('contact-page');
Route::get('/404', [\App\Http\Controllers\WecolmeController::class, 'notFound'])->name('404-error');
Route::get('/shop', [\App\Http\Controllers\WecolmeController::class, 'shop'])->name('shop-page');
Route::get('/cart', [\App\Http\Controllers\WecolmeController::class, 'cart'])->name('cart-page');
Route::get('/checkout', [\App\Http\Controllers\WecolmeController::class, 'checkout'])->name('checkout-page');
Route::get('/news', [\App\Http\Controllers\WecolmeController::class, 'news'])->name('news-page');
Route::get('/single-news', [\App\Http\Controllers\WecolmeController::class, 'singleNews'])->name('singleNews-page');

//------------------------------------------
Route::get('/products/add-product', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::post('/products/add-product', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
//--------------------------------------------























// Grouped Routes for Shop Admin
Route::prefix('shop/admin')->name('admin.')->middleware(['auth', 'isAdmin'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Manage Products
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    // Manage Orders
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');

    // Manage Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // Manage Users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::post('/users/{id}/block', [UserController::class, 'block'])->name('users.block');
    Route::post('/users/{id}/unblock', [UserController::class, 'unblock'])->name('users.unblock');

    // Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
});


