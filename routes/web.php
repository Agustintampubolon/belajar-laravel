<?php

Route::get('/', function() {
    return view('index');
});

Route::get('/films/create', 'FilmsController@create');

Route::get('/films', 'FilmsController@index');

Route::post('/films', 'FilmsController@store');

Route::get('/films/edit/{id}', 'FilmsController@edit');

Route::post('/films/update/{id}', 'FilmsController@update');

Route::delete('/films/{id}', 'FilmsController@destroy');

Route::get('/index', 'WebController@index');

Route::get('/pemains/create', 'PemainsController@create');

Route::get('/pemains', 'PemainsController@index');

Route::post('/pemains', 'PemainsController@store');

Route::get('/', 'WebController@index');

Route::get('/pemains/edit/{id}', 'PemainsController@edit');

Route::post('/pemains/update/{id}', 'PemainsController@update');

Route::delete('/pemains/{id}', 'PemainsController@destroy');


Route::get('/', 'AuthController@showFormLogin')->name('login');

Route::get('login', 'AuthController@showFormLogin')->name('login');

Route::post('login', 'AuthController@login');

Route::get('register', 'AuthController@showFormRegister')->name('register');

Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('index', 'WebController@index')->name('index');
    Route::get('logout', 'AuthController@logout')->name('logout');
});
