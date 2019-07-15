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
//Route::get('/home', function(){
//   return view('home');
//});
//Route::get('/admin', function (){
//   return view('admin');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@vote')->name('vote');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admintambahuser', 'TambahUserController@index')->name('admintambahuser');

Route::post('/gantipassword','HomeController@gantipassword')->name('gantipassword');


Route::get('/admintambah', 'tambahkandidatController@index')->name('admintambah');
Route::post('/admintambah', 'tambahkandidatController@tambahkandidat')-> name('tambahkandidat');


Route::get('/adminhapus', 'AdminHapusController@index')->name('adminhapus');
Route::post('/adminhapus', 'AdminHapusController@hapus')->name('hapuskandidat');

Route::get('logout', 'HomeController@logout');


//Route CRUD Kandidat

//Route::get('/home', 'KandidatController@home');
