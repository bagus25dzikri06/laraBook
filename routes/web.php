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

//route CRUD
Route::get('/buku', 'BukuController@index');
Route::get('/buku/add', 'BukuController@add');
Route::post('/buku/store', 'BukuController@store');
Route::get('/buku/edit/{id}','BukuController@edit');
Route::post('/buku/update', 'BukuController@update');
Route::get('/buku/delete/{id}','BukuController@delete');