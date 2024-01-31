<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


Route::GET('/welcome', [ProductsController::class, 'welcome'])->name('welcome');

Route::POST('/login', [ProductsController::class, 'login'])->name('login');

Route::get('/register/view', [ProductsController::class, 'register'])->name('register');

Route::POST('/register/store', [ProductsController::class, 'registerstore'])->name('registerstore');

Route::GET('/profile/view', [ProductsController::class, 'profile'])->name('profile');

Route::get('/products/create', [ProductsController::class, 'createProduct'])->name('productscreate');

Route::POST('/products/store', [ProductsController::class, 'update'])->name('productsupadate');

Route::get('/products/list', [ProductsController::class, 'productslist'])->name('productslist');

Route::get('/products/show', [ProductsController::class, 'listproducts'])->name('productsshow');

Route::post('/products/update/{id}', [ProductsController::class, 'updateproducts'])->name('productsupdate');



