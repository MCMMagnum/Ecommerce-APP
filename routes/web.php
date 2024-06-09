<?php

use App\Livewire\AboutUsComponent;
use App\Livewire\CartComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\ContactComponent;
use App\Livewire\HomeComponent;
use App\Livewire\LoginComponent;
use App\Livewire\RegisterComponent;
use App\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', HomeComponent::class)->name('home.index');
Route::get('/about-us', AboutUsComponent::class)->name('about.index');
Route::get('/shop', ShopComponent::class)->name('shop.index');
Route::get('/cart', CartComponent::class)->name('cart.index');
Route::get('/checkout', CheckoutComponent::class)->name('checkout.index');
Route::get('/contact', ContactComponent::class)->name('contact.index');

Route::middleware([
    'auth:sanctum','verified',])->group(function () 
    { Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});


Route::middleware(['auth:sanctum','verified',])->group(function(){});
Route::middleware(['auth:sanctum','verified',])->group(function(){});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){})->name('dashboard');