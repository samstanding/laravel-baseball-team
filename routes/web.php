<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/players', 'PlayerController@index');

Route::get('/players/create', 'PlayerController@create');

Route::post('/create', 'PlayerController@store');

Route::get('/players/types', 'TypesController@index' );

Route::get('/types/{type}', 'TypesController@show');

Route::get('/players/{id}', 'PlayerController@show');