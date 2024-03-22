<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
});

require __DIR__.'/auth.php';

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/trash', [PostController::class, 'trash'])->name('posts.trash');
Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show')->where('id', '[0-9]+');


Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('users', [UserController::class, "index"])->name('users.index');
// Route::get('notifications', [UserController::class, "listNotifications"])->name('notifications.index')->middleware('autth');

// Route::resource('posts', PostController::class);

Route::fallback(fn() => 'Route not found');