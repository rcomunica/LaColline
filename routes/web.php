<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPanel;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/locale/{locale}', function ($locale) {

    if (!in_array($locale, ['en', 'es', 'fr', 'ar'])) {
        abort(404);
    }

    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('shop', [ShopController::class, 'index'])->name('shop');


Route::resource('products', ProductosController::class)
    ->except('show')
    ->middleware(['auth', 'verified']);

Route::resource('userlist', DashboardPanel::class)
    ->except(['show'])
    ->middleware(['auth', 'verified']);




// Auth

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
