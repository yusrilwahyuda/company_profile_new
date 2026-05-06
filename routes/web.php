<?php

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
    return view('welcome');
});

//menu profil
Auth::routes();
Route::get('/visi-misi', 'HomeController@visi_misi');
Route::get('/latar_belakang', 'HomeController@latar_belakang');
Route::get('/kepemilikan', 'HomeController@kepemilikan');
Route::get('/struktur', 'HomeController@struktur');

//menu produk
Route::get('/penjaminankredit', 'HomeController@penjaminankredit');
Route::get('/suretybond', 'HomeController@suretybond');
Route::get('/bankgaransi', 'HomeController@bank_garansi');
Route::get('/pembiayaansyariah', 'HomeController@pembiayaan_syariah');

//menu Laporan
Route::get('/annual_report', 'HomeController@annual_report');
Route::get('/gcg', 'HomeController@gcg');
// Route::get('/klaim', 'HomeController@klaim');
Route::get('/auditor', 'HomeController@auditor');
Route::get('/renbis', 'HomeController@renbis');

//menu ppid
Route::get('/tentang_ppid', 'HomeController@tentang_ppid');
Route::get('/kelengkapan_ppid', 'HomeController@kelengkapan_ppid');
Route::get('/standard_ppid', 'HomeController@standard_ppid');
Route::get('/layanan_ppid', 'HomeController@layanan_ppid');
Route::get('/peraturan_ppid', 'HomeController@peraturan_ppid');
Route::get('/pos_ppid', 'HomeController@pos_ppid');
Route::get('/wbs', 'HomeController@wbs');