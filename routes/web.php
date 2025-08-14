<?php

use App\Livewire\Products\ProductCreate;
use App\Livewire\Products\ProductEdit;
use App\Livewire\Products\ProductIndex;
use App\Livewire\Products\ProductShow;
use App\Livewire\Roles\RoleCreate;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserIndex;
use App\Livewire\Users\UserShow;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get("users", UserIndex::class)->name("user.index");
    Route::get("users/create", UserCreate::class)->name('user.create');
    Route::get("users/{id}/edit", UserEdit::class)->name('user.edit');
    Route::get("users/{id}/", UserShow::class)->name("user.show");

    Route::get("products", ProductIndex::class)->name("product.index");
    Route::get("products/create", ProductCreate::class)->name('product.create');
    Route::get("products/{id}/edit", ProductEdit::class)->name('product.edit');
    Route::get("products/{id}/", ProductShow::class)->name("product.show");

    Route::get("roles", RoleIndex::class)->name("role.index");
    Route::get("roles/create", RoleCreate::class)->name("role.create");

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
