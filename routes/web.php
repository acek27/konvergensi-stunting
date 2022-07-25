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
//
//Route::get('/', function () {
//    return view('welcome');
//})->name('landing.page');
Route::get('/', [\App\Http\Controllers\DashboardController::class,'index'])->name('index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin

Route::get('/posts/data', [App\Http\Controllers\Admin\PostController::class, 'anyData'])->name('posts.data');
Route::get('/posts/image/{id}', [App\Http\Controllers\Admin\PostController::class, 'file'])->name('posts.file');
Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);

Route::get('/peraturan/data', [App\Http\Controllers\Admin\PeraturanController::class, 'anyData'])->name('peraturan.data');
Route::get('/peraturan/file/{id}', [App\Http\Controllers\Admin\PeraturanController::class, 'file'])->name('peraturan.file');
Route::resource('peraturan', \App\Http\Controllers\Admin\PeraturanController::class);

Route::get('/galeri/data', [App\Http\Controllers\Admin\GaleriController::class, 'anyData'])->name('galeri.data');
Route::get('/galeri/file/{id}', [App\Http\Controllers\Admin\GaleriController::class, 'file'])->name('galeri.file');
Route::resource('galeri', \App\Http\Controllers\Admin\GaleriController::class);
