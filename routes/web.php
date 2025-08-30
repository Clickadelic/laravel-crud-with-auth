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
    Route::get('/', [PostController::class, 'index'])->name('posts.index'); // GET mit PostController::index
    Route::get('/create', [PostController::class, 'create'])->name('posts.create'); // GET mit PostController::create
    Route::post('/', [PostController::class, 'store'])->name('posts.store'); // POST mit PostController::store
    Route::get('/{post}', [PostController::class, 'show'])->name('posts.show'); // GET mit PostController::show
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // GET mit PostController::edit
    Route::put('/{post}', [PostController::class, 'update'])->name('posts.update'); // PUT mit PostController::update
    Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); // DELETE mit PostController::destroy
});


// Users
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index'); // GET mit UserController::index
    Route::get('/create', [UserController::class, 'create'])->name('users.create'); // GET mit UserController::create
    Route::post('/', [UserController::class, 'store'])->name('users.store'); // POST mit UserController::store
    Route::get('/{users}', [UserController::class, 'show'])->name('users.show'); // GET mit UserController::show
    Route::get('/{users}/edit', [UserController::class, 'edit'])->name('users.edit'); // GET mit UserController::edit
    Route::put('/{users}', [UserController::class, 'update'])->name('users.update'); // PUT mit UserController::update
    Route::delete('/{users}', [UserController::class, 'destroy'])->name('users.destroy'); // DELETE mit UserController::destroy
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
