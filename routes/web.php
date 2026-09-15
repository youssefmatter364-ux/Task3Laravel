<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Order_ItemController;

Route::get('/', function () {
    return view('welcome');
});


// ================= Categories =================

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::post('/categories/store', [CategoryController::class, 'store'])
    ->name('categories.store');

Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])
    ->name('categories.edit');

Route::post('/categories/update/{id}', [CategoryController::class, 'update'])
    ->name('categories.update');

Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])
    ->name('categories.delete');

Route::get('/categories/{id}', [CategoryController::class, 'show'])
    ->name('categories.show');


// ================= Products =================

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::post('/products/store', [ProductController::class, 'store'])
    ->name('products.store');

Route::get('/products/edit/{id}', [ProductController::class, 'edit'])
    ->name('products.edit');

Route::post('/products/update/{id}', [ProductController::class, 'update'])
    ->name('products.update');

Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])
    ->name('products.delete');

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');


// ================= Users =================

Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])
    ->name('users.create');

Route::post('/users/store', [UserController::class, 'store'])
    ->name('users.store');

Route::get('/users/edit/{id}', [UserController::class, 'edit'])
    ->name('users.edit');

Route::post('/users/update/{id}', [UserController::class, 'update'])
    ->name('users.update');

Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])
    ->name('users.delete');

Route::get('/users/{id}', [UserController::class, 'show'])
    ->name('users.show');


// ================= Orders =================

Route::get('/orders', [OrderController::class, 'index'])
    ->name('orders.index');

Route::get('/orders/create', [OrderController::class, 'create'])
    ->name('orders.create');

Route::post('/orders/store', [OrderController::class, 'store'])
    ->name('orders.store');

Route::get('/orders/edit/{id}', [OrderController::class, 'edit'])
    ->name('orders.edit');

Route::post('/orders/update/{id}', [OrderController::class, 'update'])
    ->name('orders.update');

Route::delete('/orders/delete/{id}', [OrderController::class, 'destroy'])
    ->name('orders.delete');

Route::get('/orders/{id}', [OrderController::class, 'show'])
    ->name('orders.show');


// ================= Order Items =================

Route::get('/order-items', [Order_ItemController::class, 'index'])
    ->name('order_items.index');

Route::get('/order-items/create', [Order_ItemController::class, 'create'])
    ->name('order_items.create');

Route::post('/order-items/store', [Order_ItemController::class, 'store'])
    ->name('order_items.store');

Route::get('/order-items/edit/{id}', [Order_ItemController::class, 'edit'])
    ->name('order_items.edit');

Route::post('/order-items/update/{id}', [Order_ItemController::class, 'update'])
    ->name('order_items.update');

Route::delete('/order-items/delete/{id}', [Order_ItemController::class, 'destroy'])
    ->name('order_items.delete');

Route::get('/order-items/{id}', [Order_ItemController::class, 'show'])
    ->name('order_items.show');