<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    PostController
};
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
Route::update('/posts/{id}',[PostController::class,'update'])->name('posts.update');
Route::delete('/posts/{id}',[PostController::class, 'destroy'])->name('posts.destroy');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/', function () {
    return view('welcome');
});
