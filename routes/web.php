<?php

use App\Livewire\Shop;
use App\Livewire\Frontend;
use App\Livewire\Settings;

use App\Livewire\Dashboard;
use App\Livewire\OrderForm;
use App\Livewire\OrderDetails;
use App\Livewire\ProductIndex;
use App\Livewire\CategoryIndex;
use App\Livewire\ProductComponent;
use App\Livewire\CategoryComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Livewire\Account;

Route::get('/', Frontend::class)->name('frontend');
// web.php
Route::get('/order-details/{order}', OrderDetails::class)->name('order.details');
Route::get('/pay/{order}', [PaymentController::class, 'payNow'])->name('payment.payNow');
Route::post('/payment/notification', [PaymentController::class, 'handleNotification']);
Route::get('/shop/{slug}', Shop::class)->name('shop');



//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');
Route::middleware(['auth', 'role:admin', 'permission:Access All'])->group(function () {
    Route::get('/products/create', ProductComponent::class)->name('products.create');
    Route::get('/products', ProductIndex::class)->name('products');
    Route::get('/settings', Settings::class)->name('settings');
    Route::get('/categories', CategoryIndex::class)->name('categories');
    Route::get('/categories/create', CategoryComponent::class)->name('categories.create');
});

Route::middleware(['auth'])->group(
    function () {
        Route::get('/account', Account::class)->name('account');
        Route::get('/payment/finish', [PaymentController::class, 'handleFinish'])->name('payment.finish');
        Route::get('/payment/pending', [PaymentController::class, 'handlePending'])->name('payment.pending');
        Route::get('/payment/error', [PaymentController::class, 'handleError'])->name('payment.error');
        Route::get('/payment/expire', [PaymentController::class, 'handleExpire'])->name('payment.expire');
    }
);
Route::get('/dashboard', Dashboard::class)
    ->middleware(['auth', 'verified', 'role:admin', 'permission:Access All'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
