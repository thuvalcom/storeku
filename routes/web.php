<?php

use App\Livewire\Frontend;
use App\Livewire\Dashboard;
use App\Livewire\ProductIndex;
use App\Livewire\CategoryIndex;
use App\Livewire\ProductComponent;
use App\Livewire\CategoryComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Frontend::class)->name('frontend');

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/products/create', ProductComponent::class)->name('products.create');
    Route::get('/products', ProductIndex::class)->name('products');
    Route::get('/categories', CategoryIndex::class)->name('categories');
    Route::get('/categories/create', CategoryComponent::class)->name('categories.create');
});

Route::get('/dashboard', Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
