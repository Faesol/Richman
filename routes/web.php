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

Route::get('/', 'HomeController@index');
Route::get('/kelas/{id}','HomeController@DtlKelas');
Route::get('/programming','HomeController@KatKelasP');
Route::get('/multimedia','HomeController@KatKelasM');
Route::get('/kelas-saya','HomeController@Ksaya');

Auth::routes();

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

//User
Route::get('/admin', 'HomeControllerAdmin@index')->middleware('admin');
Route::get('/tutor', 'HomeControllerPengajar@index')->middleware('agent');
Route::get('/pelajar', 'HomeControllerPelajar@index')->middleware('customer');

//Route Pelajar
Route::get('/kategori-kelas-pemrograman','HomeControllerPelajar@KtkelasP')->middleware('customer');
Route::get('/transaksi','HomeControllerPelajar@Tkelas')->middleware('customer');
Route::get('/daftar-kelas/{id}','HomeControllerPelajar@df_kelas')->middleware('customer');
Route::post('/beli-kelas/{id}','HomeControllerPelajar@bl_kelas')->middleware('customer');
Route::get('/bayar-kelas/{id}','HomeControllerPelajar@byr_kelas')->middleware('customer');
Route::get('/buka-kelas/{id}','HomeControllerPelajar@bk_kelas')->middleware('customer');
Route::get('/pelajar/kategori-kelas-multimedia','HomeControllerPelajar@DtlKelas')->middleware('customer');
Route::get('/kelas/{id}','HomeControllerPelajar@DtKelas')->middleware('customer');
Route::get('/buka-topik/{idk}/{idt}','HomeControllerPelajar@bt_topik')->middleware('customer');

//Route Pengajar
Route::get('/tutor/course','HomeControllerPengajar@get_kelola_kelas')->middleware('agent');
Route::get('/tutor/buat-kelas','HomeControllerPengajar@get_buat_kelas')->middleware('agent');
Route::post('/tutor/pengajar_buat_kelas', 'HomeControllerPengajar@post_buat_kelas')->middleware('agent');
Route::get('/tutor/lihat_kelas/{id}','HomeControllerPengajar@get_lihat_materi')->middleware('agent');
Route::get('/tutor/edit_kelas/{id}','HomeControllerPengajar@get_edit_materi')->middleware('agent');
Route::put('/tutor/update_kelas/{id}','HomeControllerPengajar@get_update_materi')->middleware('agent');
Route::get('/tutor/penjualan_kelas/{id}','HomeControllerPengajar@get_penjualan_kelas')->middleware('agent');
Route::get('/tutor/detail_kelas/{id}','HomeControllerPengajar@get_detail_kelas')->middleware('agent');
Route::get('/tutor/buat-topik/{id}','HomeControllerPengajar@get_buat_topik')->middleware('agent');
Route::post('/tutor/pengajar_buat_topik/{slug}', 'HomeControllerPengajar@post_buat_topik')->middleware('agent');

//Admin
Route::get('/admin','HomeControllerAdmin@index')->middleware('admin');
