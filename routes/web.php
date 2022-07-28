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
Route::get('/', [\App\Http\Controllers\Guest\DashboardController::class,'index'])->name('index');
Auth::routes();

//guest
    //stunting
Route::resource('stunting', \App\Http\Controllers\Guest\StuntingController::class);
    //program kegiatan
Route::resource('program', \App\Http\Controllers\Guest\ProgramController::class);
    //rembuk
Route::resource('rembuk', \App\Http\Controllers\Guest\RembukController::class);
    //media
Route::resource('media', \App\Http\Controllers\Guest\MediaController::class);
    //legalitas
Route::resource('legalitas', \App\Http\Controllers\Guest\LegalitasController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin
    //beranda
Route::get('/posts/data', [App\Http\Controllers\Admin\PostController::class, 'anyData'])->name('posts.data');
Route::get('/posts/image/{id}', [App\Http\Controllers\Admin\PostController::class, 'file'])->name('posts.file');
Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);

    //Data Stunting
Route::get('/datastunting/data', [App\Http\Controllers\Admin\DataStuntingController::class, 'anyData'])->name('datastunting.data');
Route::get('/datastunting/image/{id}', [App\Http\Controllers\Admin\DataStuntingController::class, 'file'])->name('datastunting.file');
Route::resource('datastunting', \App\Http\Controllers\Admin\DataStuntingController::class);

    //kegiatan
Route::get('/kegiatan/data', [App\Http\Controllers\Admin\KegiatanController::class, 'anyData'])->name('kegiatan.data');
Route::get('/kegiatan/image/{id}', [App\Http\Controllers\Admin\KegiatanController::class, 'file'])->name('kegiatan.file');
Route::resource('kegiatan', \App\Http\Controllers\Admin\KegiatanController::class);

    //rembuk stunting
Route::get('/rembukstunting/data', [App\Http\Controllers\Admin\RembukStuntingController::class, 'anyData'])->name('rembukstunting.data');
Route::get('/rembukstunting/image/{id}', [App\Http\Controllers\Admin\RembukStuntingController::class, 'file'])->name('rembukstunting.file');
Route::resource('rembukstunting', \App\Http\Controllers\Admin\RembukStuntingController::class);

    //peraturan
Route::get('/peraturan/data', [App\Http\Controllers\Admin\PeraturanController::class, 'anyData'])->name('peraturan.data');
Route::get('/peraturan/file/{id}', [App\Http\Controllers\Admin\PeraturanController::class, 'file'])->name('peraturan.file');
Route::resource('peraturan', \App\Http\Controllers\Admin\PeraturanController::class);

//galeri
Route::get('/galeri/data', [App\Http\Controllers\Admin\GaleriController::class, 'anyData'])->name('galeri.data');
Route::get('/galeri/file/{id}', [App\Http\Controllers\Admin\GaleriController::class, 'file'])->name('galeri.file');
Route::resource('galeri', \App\Http\Controllers\Admin\GaleriController::class);
