<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.admin');
})->name('landing.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin
Route::prefix('admin')->group(function () {
    Route::get('/posts/image/{id}', [App\Http\Controllers\Admin\PostController::class, 'file'])->name('post.file');
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('files', \App\Http\Controllers\Admin\PostController::class);
});
