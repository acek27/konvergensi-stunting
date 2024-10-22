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
//    return view('layouts.admin');
//})->name('index');
Route::get('/', [\App\Http\Controllers\Guest\DashboardController::class, 'index'])->name('index');
Route::get('/berita/{id}', [\App\Http\Controllers\Guest\DashboardController::class, 'show'])->name('berita.show');
Route::get('/peta/sebaran/{id}', [\App\Http\Controllers\Guest\DashboardController::class, 'peta']);
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Route::get('/reset/show/{id}', [App\Http\Controllers\HomeController::class, 'reset'])->name('reset.pass');
Route::put('/reset/submit/{id}', [App\Http\Controllers\HomeController::class, 'submit'])->name('reset.submit');

//super
Route::put('/super/addrole/{id}', [App\Http\Controllers\Super\UserController::class, 'addrole'])->name('super.addRole');
Route::delete('/super/delrole/{id}', [App\Http\Controllers\Super\UserController::class, 'delrole'])->name('super.delRole');
Route::get('/super/data', [App\Http\Controllers\Super\UserController::class, 'anyData'])->name('super.data');
Route::resource('super', \App\Http\Controllers\Super\UserController::class);

//guest
//stunting
Route::resource('stunting', \App\Http\Controllers\Guest\StuntingController::class);
//program kegiatan
Route::post('listprogram', [\App\Http\Controllers\Guest\ProgramController::class, 'program'])
    ->name('list.program');
Route::resource('program', \App\Http\Controllers\Guest\ProgramController::class);
//rembuk
Route::resource('rembuk', \App\Http\Controllers\Guest\RembukController::class);
//media
Route::resource('media', \App\Http\Controllers\Guest\MediaController::class);
//legalitas
Route::resource('legalitas', \App\Http\Controllers\Guest\LegalitasController::class);
//materi
Route::resource('materi', \App\Http\Controllers\Guest\MateriController::class);
//agenda
Route::resource('event', \App\Http\Controllers\Guest\EventController::class);
//TPPS
Route::get('/renja/tpps', [\App\Http\Controllers\Guest\TppsController::class, 'renja'])->name('renja.tpps');
Route::get('/laporan/tpps', [\App\Http\Controllers\Guest\TppsController::class, 'laporan'])->name('laporan.tpps');
Route::get('/tpps/kabupaten', [\App\Http\Controllers\Guest\TppsController::class, 'kabupaten'])->name('tpps.kab');
Route::get('/tpps/kecamatan', [\App\Http\Controllers\Guest\TppsController::class, 'kecamatan'])->name('tpps.kec');
Route::get('/tpps/desa', [\App\Http\Controllers\Guest\TppsController::class, 'desa'])->name('tpps.desa');
Route::get('/kpm/data', [\App\Http\Controllers\Guest\KpmController::class, 'index'])->name('kpm.data');

//innovation
Route::get('/innovation/image/{id}', [\App\Http\Controllers\Guest\InnovationController::class, 'image'])->name('innovation.image');
Route::get('/innovation/file/{id}', [\App\Http\Controllers\Guest\InnovationController::class, 'file'])->name('innovation.file');
Route::resource('innovation', \App\Http\Controllers\Guest\InnovationController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin
//beranda
Route::get('/posts/data', [App\Http\Controllers\Admin\PostController::class, 'anyData'])->name('posts.data');
Route::get('/posts/image/{id}', [App\Http\Controllers\Admin\PostController::class, 'file'])->name('posts.file');
Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);

//kpm
Route::get('/kpmadm/data', [App\Http\Controllers\Admin\KpmadmController::class, 'anyData'])->name('kpmadm.data');
Route::get('/kpmadm/file/{id}', [App\Http\Controllers\Admin\KpmadmController::class, 'file'])->name('kpmadm.file');
Route::resource('kpmadm', \App\Http\Controllers\Admin\KpmadmController::class);

//Data Stunting
Route::get('/datastunting/data', [App\Http\Controllers\Admin\DataStuntingController::class, 'anyData'])->name('datastunting.data');
Route::get('/datastunting/image/{id}', [App\Http\Controllers\Admin\DataStuntingController::class, 'file'])->name('datastunting.file');
Route::resource('datastunting', \App\Http\Controllers\Admin\DataStuntingController::class);

//TPPS
Route::get('/tppskec/data', [App\Http\Controllers\Admin\TppskecamatanController::class, 'anyData'])->name('tppskec.data');
Route::get('/tppskec/file/{id}', [App\Http\Controllers\Admin\TppskecamatanController::class, 'file'])->name('tppskec.file');
Route::get('/tppskec/loaddesa/{id}', [App\Http\Controllers\Admin\TppskecamatanController::class, 'loaddesa'])->name('tppskec.desa');
Route::resource('tppskec', \App\Http\Controllers\Admin\TppskecamatanController::class);
Route::get('/tppsdesa/data', [App\Http\Controllers\Admin\TppsdesaController::class, 'anyData'])->name('tppsdesa.data');
Route::get('/tppsdesa/file/{id}', [App\Http\Controllers\Admin\TppsdesaController::class, 'file'])->name('tppsdesa.file');
Route::resource('tppsdesa', \App\Http\Controllers\Admin\TppsdesaController::class);
//Admin-Renja
Route::get('/renja/data', [App\Http\Controllers\Admin\RenjaController::class, 'anyData'])->name('renja.data');
Route::get('/renja/file/{id}', [App\Http\Controllers\Admin\RenjaController::class, 'file'])->name('renja.file');
Route::resource('renja', \App\Http\Controllers\Admin\RenjaController::class);
//Admin-Laporan
Route::get('/laporan/data', [App\Http\Controllers\Admin\LaporanController::class, 'anyData'])->name('laporan.data');
Route::get('/laporan/file/{id}', [App\Http\Controllers\Admin\LaporanController::class, 'file'])->name('laporan.file');
Route::resource('laporan', \App\Http\Controllers\Admin\LaporanController::class);

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

//paparan
Route::get('/paparan/data', [App\Http\Controllers\Admin\PaparanController::class, 'anyData'])->name('paparan.data');
Route::get('/paparan/file/{id}', [App\Http\Controllers\Admin\PaparanController::class, 'file'])->name('paparan.file');
Route::resource('paparan', \App\Http\Controllers\Admin\PaparanController::class);

//agenda
Route::get('/agenda/data', [App\Http\Controllers\Admin\AgendaController::class, 'anyData'])->name('agenda.data');
Route::resource('agenda', \App\Http\Controllers\Admin\AgendaController::class);

//video
Route::get('/video/data', [App\Http\Controllers\Admin\VideoController::class, 'anyData'])->name('video.data');
Route::resource('video', \App\Http\Controllers\Admin\VideoController::class);

//map
Route::get('/map/data', [App\Http\Controllers\Admin\MapController::class, 'anyData'])->name('map.data');
Route::get('/map/file/{id}', [App\Http\Controllers\Admin\MapController::class, 'file'])->name('map.file');
Route::resource('map', \App\Http\Controllers\Admin\MapController::class);

//sidebar
Route::get('/sidebar/data', [App\Http\Controllers\Admin\SidebarController::class, 'anyData'])->name('sidebar.data');
Route::get('/sidebar/file/{id}', [App\Http\Controllers\Admin\SidebarController::class, 'file'])->name('sidebar.file');
Route::resource('sidebar', \App\Http\Controllers\Admin\SidebarController::class);

//inovasi
Route::get('/inovasi/data', [App\Http\Controllers\Admin\InovasiController::class, 'anyData'])->name('inovasi.data');
Route::resource('inovasi', \App\Http\Controllers\Admin\InovasiController::class);

//statistik
Route::get('/statistik', function () {
    return view('guest.statistik');
})->name('statistik.index');

Route::get('/faq', [App\Http\Controllers\FaqController::class, 'create'])->name('faq.index');
Route::post('/faq', [App\Http\Controllers\FaqController::class, 'store'])->name('faq.store');

Route::get('/qna', [App\Http\Controllers\FaqController::class, 'index'])->name('qna.index');
Route::put('/qna/{tiket}', [App\Http\Controllers\FaqController::class, 'update'])->name('qna.update');
Route::get('/qna/show/{tiket}', [App\Http\Controllers\FaqController::class, 'show'])->name('qna.show');
