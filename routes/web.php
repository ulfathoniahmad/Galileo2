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


Route::get('penilaian_siswa','penilaianController@index');


Route::resource('post', 'PostsController');
Route::resource('pos2', 'Pos2Controller');
Route::resource('posts', 'PostsController');
Route::resource('siswa', 'siswaController');
Route::resource('pegawai', 'PegawaiController');
Route::resource('pelajaran', 'PelajaranController');


