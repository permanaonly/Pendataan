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
    return view('home');
})->name('home');

Route::get('login','AuthController@login')->name('auths.login');
Route::post('login','AuthController@postlogin')->name('auths.login.post');

Route::get('regist','AuthController@regist')->name('auths.regist');
Route::post('regist','AuthController@postregist')->name('auths.regist.post');


Route::get('logout','AuthController@logout')->name('logout');

Route::get('siswa/tambah', 'DataController@createStepOne')->name('siswa.tambah');   
Route::post('siswa/tambah', 'DataController@postCreateStepOne')->name('siswa.tambah.post');

Route::get('tambah1', 'DataController@createStepOnee')->name('siswa.tambah1');
Route::post('tambah1', 'DataController@postCreateStepOnee')->name('siswa.tambah1.post');  

Route::get('tambah2', 'DataController@createStepTwo')->name('siswa.tambah2');
Route::post('tambah2', 'DataController@postCreateStepTwo')->name('siswa.tambah2.post');
    
Route::get('tambah3', 'DataController@createStepThree')->name('siswa.tambah3');
Route::post('tambah3', 'DataController@postCreateStepThree')->name('siswa.tambah3.post');

Route::get('sukses','DataController@sukses')->name('sukses');

Route::group(['middleware' => 'auth'],function(){

    Route::get('dasboard', 'DasboardController@index')->name('dasboard');
    Route::get('siswa', 'DataController@siswa')->name('siswa.siswa');
});