<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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



Route::get('/posts', [postController::class, 'index'])->name('posts.index');
Route::get('/trash', [postController::class, 'trash'])->name('posts.trash');
Route::get('posts/create', [postController::class, 'create'])->name('posts.create');
Route::post('posts', [postController::class, 'store'])->name('posts.store');
Route::get('posts/{id}', [postController::class, 'show'])->name('posts.show')->where('id', '[0-9]+');


Route::get('posts/{id}/edit', [postController::class, 'edit'])->name('posts.edit');
Route::put('posts/{id}', [postController::class, 'update'])->name('posts.update');
Route::delete('posts/{id}', [postController::class, 'destroy'])->name('posts.destroy');

Route::fallback(fn() => 'Route not found');