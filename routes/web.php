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
//     return view('welcome');
// });

/*	--DASHBOARD--	*/
Route::get('/','DashboardController@index')->name('dashboard');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes(['register' => false]);

/*	--PASIEN-- 	*/
Route::get('pasien','PasienController@index')->name('pasien');
Route::get('pasien/create','PasienController@create');
Route::get('pasien/{pasien}','PasienController@detail');
Route::get('pasien/{no_rm}/rekammedis/{id_detail_rm}','PasienController@detailrekammedis');
Route::post('pasien','PasienController@store');
Route::get('pasien/{pasien}/edit','PasienController@edit');
Route::post('pasien/{pasien}','PasienController@update');
Route::get('pasien/{pasien}/delete','PasienController@delete');

/*	--DIAGNOSA-- 	*/
Route::get('diagnosa','DiagnosaController@index')->name('diagnosa');
Route::get('diagnosa/create','DiagnosaController@create');
Route::post('diagnosa','DiagnosaController@store');
Route::get('diagnosa/{diagnosa}/edit','DiagnosaController@edit');
Route::post('diagnosa/{diagnosa}','DiagnosaController@update');
Route::get('diagnosa/{diagnosa}/delete','DiagnosaController@delete');

/*	--TINDAKAN MEDIS-- 	*/
Route::get('tindakan','TindakanController@index')->name('tindakan');
Route::get('tindakan/create','TindakanController@create');
Route::post('tindakan','TindakanController@store');
Route::get('tindakan/{tindakan}/edit','TindakanController@edit');
Route::post('tindakan/{tindakan}','TindakanController@update');
Route::get('tindakan/{tindakan}/delete','TindakanController@delete');

/*	--OBAT--  */
Route::get('obat','ObatController@index')->name('obat');
Route::get('obat/create','ObatController@create');
Route::post('obat','ObatController@store');
Route::get('obat/{obat}/edit','ObatController@edit');
Route::post('obat/{obat}','ObatController@update');
Route::get('obat/{obat}/delete','ObatController@delete');

/*	--REKAM MEDIS--	 */
Route::get('rekammedis','RekamMedisController@index');
Route::get('findStok', array('as' => 'findStok', 'uses' => 'RekamMedisController@findStok'));
Route::get('rekammedis/{id_pasien}/create','RekamMedisController@create');
Route::post('rekammedis','RekamMedisController@store');

/*	--USER--	 */
Route::get('dokter','UserController@index_dokter')->name('dokter');
Route::get('admin','UserController@index_admin')->name('admin');
Route::get('dokter/create','UserController@create_dokter');
Route::get('admin/create','UserController@create_admin');
Route::post('dokter','UserController@store_dokter');
Route::post('admin','UserController@store_admin');
Route::get('user/{user}/edit','UserController@edit');
Route::post('user/{user}','UserController@update');
Route::get('user/{user}/delete','UserController@destroy');

/*	--STOK OBAT--	*/
Route::get('stokobat','StokObatController@index')->name('stokobat');

/*	--LAPORAN KUNJUNGAN--	 */
Route::get('lap_kunjungan','LaporanKunjunganController@index')->name('lap_kunjungan');
Route::get('cari_lapkunjungan','LaporanKunjunganController@cari');
Route::get('export_kunjungan/{dari}/{sampai}','LaporanKunjunganController@export_kunjungan');

/*	--LAPORAN STOK--	 */
Route::get('lap_stok','LaporanStokController@index')->name('lap_stok');
Route::get('cari_lapstok','LaporanStokController@cari');
Route::get('export_stok/{dari}/{sampai}','LaporanStokController@export_stok');