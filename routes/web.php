<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BackendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index']);

Auth::routes(['register' => true]);

Route::get('/backend/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show']);
Route::get('/query', [PostController::class, 'search_posts'])->name('search');

Route::middleware(['auth'])->group(function () {
    Route::get('backend/home', [BackendController::class, 'index']);
    Route::get('backend/posts/create', [BackendController::class, 'create']);
    Route::post('backend/posts/store', [BackendController::class, 'store'])->name('post.store');
    Route::delete('backend/{id}/delete', [BackendController::class, 'destroy'])->name('post.destroy');
    Route::get('backend/edit/{id}', [BackendController::class, 'edit'])->name('post.edit');
    Route::put('backend/{id}', [BackendController::class, 'update'])->name('post.update');

    // change status
    Route::put('backend/update-status/{id}', [BackendController::class, 'isPublished'])->name('post.status');
});

// pages routes
