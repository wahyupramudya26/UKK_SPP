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

// Route::get('/', function () {
//     return view('halamanawal');
// });
Route::get('/','Admin\DashboardController@index')->name('halamanawal');

Route::group(['middleware' => ['web','auth']], function(){
	Route::get('/dashboard','Admin\DashboardController@getDashboard')->name('dashboard');
	Route::get('/logout','AuthController@logout')->name('logout');
	Route::resource('siswa', 'Admin\SiswaController');
	Route::get('/table/siswa','Admin\SiswaController@dataTable')->name('table.siswa');
	Route::get('export','Admin\SiswaController@siswaExport')->name('siswa.export');
	Route::post('import','Admin\SiswaController@siswaImport')->name('siswa.import');
});

Route::group(['middleware' => ['web','guest']], function(){
	Route::get('/register','AuthController@getRegister')->name('register');
	Route::post('/register','AuthController@postRegister');
	Route::get('/login','AuthController@getLogin')->name('login');
	Route::post('/login','AuthController@postLogin');
});




Route::resource('karyawan','Admin\KaryawanController');
Route::resource('kelas', 'Admin\KelasController');
Route::resource('nama_kelas', 'Admin\NamaKelasController');
Route::resource('kompetensi','Admin\KompetensiController');
Route::resource('akses', 'Admin\AksesController');
Route::resource('tahun_ajaran','Admin\Tahun_AjaranController');
Route::resource('pos','Admin\PosController');
Route::resource('jenis','Admin\JenisController');
Route::get('/setting/{id}','Admin\JenisController@setting')->name('setting');
Route::get('/create_tarif/{id}','Admin\JenisController@create_tarif')->name('create_tarif');
Route::put('/update_tarif/{id}','Admin\JenisController@update_tarif')->name('update_tarif');
Route::resource('pembayaran','Admin\PembayaranController');
Route::resource('identitas','Admin\IdentitasController');