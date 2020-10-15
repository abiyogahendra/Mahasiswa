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
// Route::group([
//     'middleware' => ['check.auth']
// ], function () {
    
// }
// );
  
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/data_admin','DataController@LoadingPage')->name('mahasiswa');

    Route::get('/tambah_mahasiswa','TambahMahasiswaController@index')->name('tambah_mahasiswa');
    Route::get('/data_admin/{id}','OperasionalController@index_delete')->name('delete');    
    Route::get('/edit_mahasiswa/{id}','OperasionalController@index_edit')->name('edit');
    Route::post('/edit_mahasiswa/{id}','OperasionalController@post_edit');
    Route::post('/tambah_mahasiswa','OperasionalController@index_tambah');

            Route::get('/data_nilai','DataNilaiController@index')->name('data_nilai');
            Route::get('/tambah_nilai','TambahNilaiController@index')->name('tambah_nilai');
            Route::post('/tambah_nilai','TambahNilaiController@tambah_nilai');
            Route::get('/tambah_nilai/{id}','TambahNilaiController@nilai_delete')->name('nilai_delete');

Route::get('/admin','AdminController@Login')->name('Login');
Route::get('logout','AdminController@logout')->name('logout');
Route::post('/admin','OperasionalController@LoginAdmin');