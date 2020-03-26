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
    return view('halamanawal');
});

Route::get('/dashboard','Admin\DashboardController@getDashboard')->name('dashboard');
Route::get('/register','AuthController@getRegister')->name('register');
Route::post('/register','AuthController@postRegister');
Route::get('/login','AuthController@getLogin')->name('login');
Route::post('/login','AuthController@postLogin');
Route::get('/logout','AuthController@logout')->name('logout');

Route::resource('siswa', 'Admin\SiswaController');
Route::resource('karyawan','Admin\KaryawanController');
Route::resource('kelas', 'Admin\KelasController');
Route::resource('kompetensi','Admin\KompetensiController');
Route::resource('akses', 'Admin\AksesController');
Route::resource('tahun_ajaran','Admin\Tahun_AjaranController');
Route::resource('pos','Admin\PosController');
Route::resource('jenis','Admin\JenisController');
Route::get('/setting/{id}','Admin\JenisController@setting')->name('setting');
Route::get('/create_tarif/{id}','Admin\JenisController@create_tarif')->name('create_tarif');
Route::put('/update_tarif/{id}','Admin\JenisController@update_tarif')->name('update_tarif');
// Route::resource('pembayaran','Admin\PembayaranController');
// Route::resource('pemasukan','Admin\PemasukanController');
// Route::resource('pengeluaran','Admin\PengeluaranController');
// Route::resource('agenda','Admin\AgendaController');
// Route::resource('identitas','Admin\IdentitasController');