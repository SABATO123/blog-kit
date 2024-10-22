<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PostController;

// Route::resource('posts', PostController::class)->middleware(['auth']);


use App\Http\Controllers\PostController;





Route::resource('posts', PostController::class);


Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
    Route::get('/create', [PostController::class, 'posts.create'])->name('create');
    
});

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');



// Route to display the edit form using GET
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route to handle the form submission using PUT/PATCH
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');



Route::get('/', [PostController::class, 'home'])->name('start');


Route::middleware('auth')->group(function () {
    Route::get('/create', [PostController::class, 'posts.create'])->name('create');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
