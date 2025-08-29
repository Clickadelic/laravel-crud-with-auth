<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Posts
Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/', [PostController::class, 'store'])->name('posts.store');
    Route::get('/{posts}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/{posts}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/{posts}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/{posts}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// Users
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/{users}', [UserController::class, 'show'])->name('users.show');
    Route::get('/{users}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{users}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{users}', [UserController::class, 'destroy'])->name('users.destroy');
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
