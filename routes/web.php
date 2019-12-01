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

Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'mahasiswa'], function() {

        Route::get('/getMahasiswa', 'MahasiswaController@getMahasiswa')->name('getMahasiswa');
        Route::get('/getBiodataMahasiswa', 'MahasiswaController@getBiodataMahasiswa')->name('getBiodataMahasiswa');
        Route::get('/insertBiodataMahasiswa', 'MahasiswaController@insertBiodataMahasiswa')->name('insertBiodataMahasiswa');
        Route::get('/DeleteBiodataMahasiswa/{id}', 'MahasiswaController@DeleteBiodataMahasiswa')->name('DeleteBiodataMahasiswa');
    });
    Route::group(['prefix' => 'umum'], function() {
        Route::get('/GetProfilPT', 'GeneralController@GetProfilPT')->name('GetProfilPT');
        Route::get('/GetToken', 'GeneralController@GetToken')->name('GetToken');
        Route::get('/GetJenjangPendidikan', 'GeneralController@GetJenjangPendidikan')->name('GetJenjangPendidikan');
        Route::get('/GetPenghasilan/{id}', 'GeneralController@GetPenghasilan')->name('GetPenghasilan');
        Route::get('/GetWilayah/{id}', 'GeneralController@GetWilayah')->name('GetWilayah');
        Route::get('/GetJenisTinggal', 'GeneralController@GetJenisTinggal')->name('GetJenisTinggal');
        Route::get('/GetAlatTransportasi', 'GeneralController@GetAlatTransportasi')->name('GetAlatTransportasi');
        Route::get('/GetNegara', 'GeneralController@GetNegara')->name('GetNegara');
        Route::get('/GetAgama/{id}', 'GeneralController@GetAgama')->name('GetAgama');
        Route::get('/GetJenisPendaftaran', 'GeneralController@GetJenisPendaftaran')->name('GetJenisPendaftaran');
        Route::get('/GetJalurMasuk', 'GeneralController@GetJalurMasuk')->name('GetJalurMasuk');
        Route::get('/GetSemester', 'GeneralController@GetSemester')->name('GetSemester');
        Route::get('/GetProdi', 'GeneralController@GetProdi')->name('GetProdi');
        Route::get('/GetAllPT', 'GeneralController@GetAllPT')->name('GetAllPT');
        Route::get('/GetAllProdi', 'GeneralController@GetAllProdi')->name('GetAllProdi');


    });


    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['prefix' => 'riwayat'], function() {

        Route::get('/GetListRiwayatPendidikanMahasiswa', 'RiwayatPendidikanController@GetListRiwayatPendidikanMahasiswa')->name('GetListRiwayatPendidikanMahasiswa');
        Route::get('/getBiodataMahasiswa', 'RiwayatPendidikanController@getBiodataMahasiswa')->name('getBiodataMahasiswa');
        Route::get('/insertBiodataMahasiswa', 'RiwayatPendidikanController@insertBiodataMahasiswa')->name('insertBiodataMahasiswa');
        Route::get('/DeleteBiodataMahasiswa/{id}', 'RiwayatPendidikanController@DeleteBiodataMahasiswa')->name('DeleteBiodataMahasiswa');
    });
});
