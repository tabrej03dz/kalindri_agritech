<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicProductController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;


/*
|--------------------------------------------------------------------------
| Public Website
|--------------------------------------------------------------------------
*/

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('home');


/*
|--------------------------------------------------------------------------
| Public Product Catalogue
|--------------------------------------------------------------------------
|
| /all-products
| /product/black-bull
|
*/

Route::get(
    '/all-products',
    [PublicProductController::class, 'index']
)->name('catalog.index');


Route::get(
    '/product/{product}',
    [PublicProductController::class, 'show']
)->name('catalog.show');


/*
|--------------------------------------------------------------------------
| Enquiry
|--------------------------------------------------------------------------
*/

Route::post(
    '/enquiries',
    [EnquiryController::class, 'store']
)->name('enquiries.store');


/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get(
        '/login',
        [AuthenticatedSessionController::class, 'create']
    )->name('login');


    Route::post(
        '/login',
        [AuthenticatedSessionController::class, 'store']
    )->name('login.store');


    Route::get(
        '/register',
        [RegisteredUserController::class, 'create']
    )->name('register');


    Route::post(
        '/register',
        [RegisteredUserController::class, 'store']
    )->name('register.store');

});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/dashboard',
        [DashboardController::class, 'index']
    )->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Admin Product Management
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/products',
        [ProductController::class, 'index']
    )->name('products.index');


    Route::get(
        '/products/create',
        [ProductController::class, 'create']
    )->name('products.create');


    Route::post(
        '/products',
        [ProductController::class, 'store']
    )->name('products.store');


    Route::get(
        '/products/{product}/edit',
        [ProductController::class, 'edit']
    )->name('products.edit');


    Route::put(
        '/products/{product}',
        [ProductController::class, 'update']
    )->name('products.update');


    Route::delete(
        '/products/{product}',
        [ProductController::class, 'destroy']
    )->name('products.destroy');


    Route::patch(
        '/products/{product}/toggle-status',
        [ProductController::class, 'toggleStatus']
    )->name('products.toggle-status');


    /*
    |--------------------------------------------------------------------------
    | Logout
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/logout',
        [AuthenticatedSessionController::class, 'destroy']
    )->name('logout');

});