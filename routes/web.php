<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/players', 'PlayerController@index');

Route::get('/players/create', 'PlayerController@create');

Route::post('/create', 'PlayerController@store');