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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', 'mahasiswaController@index');
Route::get('/mahasiswa/create', 'mahasiswaController@create');
Route::post('/mahasiswa/store', 'mahasiswaController@store');
Route::get('/mahasiswa/edit/{id}', 'mahasiswaController@edit');
Route::put('/mahasiswa/update/{id}', 'mahasiswaController@update');
Route::get('mahasiswa/delete/{id}', 'mahasiswaController@delete');

Route::get('/matkul', 'matkulController@index');
Route::get('/matkul/create', 'matkulController@create');
Route::post('/matkul/store', 'matkulController@store');
Route::get('/matkul/edit/{id}', 'matkulController@edit');
Route::put('/matkul/update/{id}', 'matkulController@update');
Route::get('matkul/delete/{id}', 'matkulController@delete');

Route::get('/nilai', 'nilaiController@index');
Route::get('/nilai/create', 'nilaiController@create');
Route::post('/nilai/store', 'nilaiController@store');	
?>