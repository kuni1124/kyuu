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

Route::get('kakunin-index', 'KakuninsController@index')->name('kakunin-index');

Route::get('shushoku-index', 'ShushokusController@index')->name('shushoku-index');
Route::get('shushoku-create', 'ShushokusController@create')->name('shushoku-create');
Route::post('shushoku-store', 'ShushokusController@store')->name('shushoku-store');
Route::get('shushoku/{id}/edit', 'ShushokusController@edit')->name('shushoku-edit');
Route::put('shushoku/{id}', 'ShushokusController@update')->name('shushoku-update');
Route::delete('shushoku/{id}', 'ShushokusController@destroy')->name('shushoku-delete');

Route::get('fukushoku-index', 'FukushokusController@index')->name('fukushoku-index');
Route::get('fukushoku-create', 'FukushokusController@create')->name('fukushoku-create');
Route::post('fukushoku-store', 'FukushokusController@store')->name('fukushoku-store');
Route::get('fukushoku/{id}/edit', 'FukushokusController@edit')->name('fukushoku-edit');
Route::put('fukushoku/{id}', 'FukushokusController@update')->name('fukushoku-update');
Route::delete('fukushoku/{id}', 'FukushokusController@destroy')->name('fukushoku-delete');

Route::get('sirumono-index', 'SirumonosController@index')->name('sirumono-index');
Route::get('sirumono-create', 'SirumonosController@create')->name('sirumono-create');
Route::post('sirumono-store', 'SirumonosController@store')->name('sirumono-store');
Route::get('sirumono/{id}/edit', 'SirumonosController@edit')->name('sirumono-edit');
Route::put('sirumono/{id}', 'SirumonosController@update')->name('sirumono-update');
Route::delete('sirumono/{id}', 'SirumonosController@destroy')->name('sirumono-delete');

Route::get('randam-index', 'DaisController@index')->name('randam-index');
Route::get('randam-create', 'DaisController@create')->name('randam-create');
Route::get('randam-create2', 'DaisController@create2')->name('randam-create2');
Route::get('randam/{id}/edit', 'DaisController@edit')->name('randam-edit');
Route::get('randam2/{id}/edit', 'DaisController@edit2')->name('randam-edit2');
Route::get('randam3/{id}/edit', 'DaisController@edit3')->name('randam-edit3');
Route::put('randam/{id}', 'DaisController@update')->name('randam-update');
Route::put('randam2/{id}', 'DaisController@update2')->name('randam-update2');
Route::put('randam3/{id}', 'DaisController@update3')->name('randam-update3');
Route::delete('randam/{id}', 'DaisController@destroy')->name('randam-delete');
Route::delete('randam2/{id}', 'DaisController@destroy2')->name('randam-delete2');
Route::delete('randam3/{id}', 'DaisController@destroy3')->name('randam-delete3');

Route::get('randam-delete4', 'DaisController@destroy4')->name('randam-delete4');


Route::get('csv-index','CsvsController@index')->name('csv-index');
