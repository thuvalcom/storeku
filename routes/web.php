<?php

use App\Livewire\Shop;
use App\Livewire\About;
use App\Livewire\Pages;

use App\Livewire\Account;
use App\Livewire\Contact;
use App\Livewire\Frontend;
use App\Livewire\Settings;
use App\Livewire\Dashboard;
use App\Livewire\OrderForm;
use App\Livewire\PagesCreate;
use App\Livewire\OrderDetails;
use App\Livewire\ProductIndex;
use App\Livewire\CategoryIndex;
use App\Livewire\Blog\PostIndex;
use App\Livewire\ProductDetails;
use App\Livewire\Blog\PostCreate;
use App\Livewire\ProductComponent;
use App\Livewire\CategoryComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\Blog\PostCategoryIndex;
use App\Livewire\Blog\PostCategoryCreate;
use App\Http\Controllers\PaymentController;

Route::get('/', Frontend::class)->name('frontend');
// web.php
Route::get('/order-details/{order}', OrderDetails::class)->name('order.details');
Route::get('/pay/{order}', [PaymentController::class, 'payNow'])->name('payment.payNow');
Route::post('/payment/notification', [PaymentController::class, 'handleNotification']);
Route::get('/shop/{slug}', Shop::class)->name('shop');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/shop/category/{slug}', ProductDetails::class)->name('shop.category');



//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');
Route::middleware(['auth', 'role:admin', 'permission:Access All'])->group(function () {
    Route::get('/products/create', ProductComponent::class)->name('products.create');
    Route::get('/products', ProductIndex::class)->name('products');
    Route::get('/pages', Pages::class)->name('pages');
    Route::get('/pages/create', PagesCreate::class)->name('pages.create');
    Route::get('/settings', Settings::class)->name('settings');
    Route::get('/categories', CategoryIndex::class)->name('categories');
    Route::get('/categories/create', CategoryComponent::class)->name('categories.create');
    Route::get('/post-category/create', PostCategoryCreate::class)->name('postcategory.create');
    Route::get('/post-category', PostCategoryIndex::class)->name('postcategory');
    Route::get('/posts', PostIndex::class)->name('posts');
    Route::get('/posts-create', PostCreate::class)->name('posts.create');
    Route::get('/blog', \App\Livewire\Blog\PostFrontend::class)->name('blog');
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
