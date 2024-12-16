<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\BookingController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\OrderManagementController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SellerBookingController;
use App\Http\Controllers\Dashboard\StoreManagementController;
use App\Http\Controllers\Dashboard\VendingController;
use Illuminate\Support\Facades\Route;



Route::get('/', [LoginController::class, 'index'])
    ->name('home');

Route::post('/login', [LoginController::class, 'store'])
    ->name('login.store');

Route::get('/register', [RegisterController::class, 'index'])
    ->name('register');

Route::post('/user/store', [RegisterController::class, 'store'])
    ->name('user.store');

Route::get('/user/started', [RegisterController::class, 'started'])
    ->name('user.started');

Route::get('/user/seller', [RegisterController::class, 'seller'])
    ->name('user.seller');

Route::get('/user/franchiser', [RegisterController::class, 'franchiser'])
    ->name('user.franchiser');


Route::prefix('/dashboard')->group(function () {

    Route::get('/', [HomeController::class, 'index'])
        ->name('dashboard');

    //vending routes
    Route::controller(VendingController::class)->group(function () {

        Route::get('/vending', 'index')->name('vending.index');

        Route::get('/vending/dhave', 'dhave')->name('vending.dhave');

        Route::get('/vending/have', 'have')->name('vending.have');
    });


    //booking routes
    Route::controller(BookingController::class)->group(function () {
        Route::get('/booking', 'index')
            ->name('booking.index');

        Route::get('/booking/slot', 'slot')
            ->name('booking.slot');

        Route::get('/booking/create_slot', 'create_slot')
            ->name('booking.create_slot');

        Route::get('/booking/timeline', 'timeline')
            ->name('booking.timeline');

        Route::get('/booking/current', 'current')
            ->name('booking.current');

        Route::get('/booking/pending', 'pending')
            ->name('booking.pending');

        Route::get('/booking/view', 'view')
            ->name('booking.view');
    });


    //seller booking routes
    Route::controller(SellerBookingController::class)->group(function () {
        Route::get('/seller/booking/pending', 'pending')
            ->name('seller.booking.pending');

        Route::get('/seller/booking/upcomming', 'upcomming')
            ->name('seller.booking.upcomming');

        Route::get('/seller/booking/download', 'download')
            ->name('seller.booking.download');
    });

    //Product routes
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index')
            ->name('product');
        Route::get('/product/add', 'add_product')
            ->name('product.add');
    });


    //Store Management

    Route::controller(StoreManagementController::class)->group(function () {
        Route::get('/store_management', 'index')
            ->name('store_management.index');

        Route::get('/store_management/online', 'online')
            ->name('store_management.online');

        Route::get('/store_management/online/recent', 'recent')
            ->name('store_management.online.recent');

        Route::get('/store_management/offline', 'offline')
            ->name('store_management.offline');

        Route::get('/store_management/offline/status', 'offline_status')
            ->name('store_management.offline.offline_status');

        Route::get('/store_management/offline/monthly-sale', 'offline_monthly_sale')
            ->name('store_management.offline.offline_monthly_sale');
    });

    // Order Management
    Route::controller(OrderManagementController::class)->group(function () {
        Route::get('/order_management', 'index')
            ->name('order_management.index');

        Route::get('/order_management/order_list', 'order_list')
            ->name('order_management.order_list');

        Route::get('/order_management/order_list/update', 'update')
            ->name('order_management.order_list.update');
    });
});
