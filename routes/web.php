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

Route::get('/artikel','ArtikelController@index');
Route::get('/artikel/create','ArtikelController@form_create');
Route::post('/artikel','ArtikelController@create');
Route::get('/artikel/{id}','ArtikelController@detail');
Route::post('/artikel/{id}','ArtikelController@edit_data');
Route::get('/artikel/{id}/edit', 'ArtikelController@edit');
Route::get('/artikell/{id}', 'ArtikelController@delete');

// Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
// Route::post('/items', 'ItemController@store'); // menyimpan data
// Route::get('/items', 'ItemController@index'); // menampilkan semua
// Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
// Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
// Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
// Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id