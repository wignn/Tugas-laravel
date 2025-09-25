<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Public route - dapat diakses tanpa login
Route::get('/data/{id?}', [ProductController::class, 'index'])->where('id', '[0-9]+');

// Routes yang hanya bisa diakses Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [ProductController::class, 'adminDashboard'])->name('admin.dashboard');
});

// Routes yang hanya bisa diakses Owner  
Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/owner', [ProductController::class, 'ownerDashboard'])->name('owner.dashboard');
});

// Routes yang bisa diakses Admin dan Owner
Route::middleware(['auth', 'role:admin,owner'])->group(function () {
    Route::get('/management', [ProductController::class, 'managementDashboard'])->name('management.dashboard');
});

require __DIR__.'/auth.php';

