<?php

Route::get('/', function() {
    // return 'Respon ini diterima dari path / dengan metode get';
    return view('index');
});

Route::get('/films/create', 'FilmsController@create');

Route::get('/films', 'FilmsController@index');

Route::post('/films', 'FilmsController@store');

// Route::get('/films', 'FilmsController@edit');

Route::get('/films/edit/{id}', 'FilmsController@edit');

// Route::get('/films/{id}', 'FilmsController@update');

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





// Route::get('/films/store', 'FilmsController@store');
// Route::get('/about', function () {
//     return view('about');
//  });Route::get('/films', function () {
//     return view('films');
//  });Route::get('/edit', function () {
//     return view('edit');
//  });Route::get('/create', function () {
//     return view('create');
//  });


// Route::get('/films/add', 'BookController@create');

// Route::get('/films', 'FilmsController@index');

// Route::get('/films', 'BookController@store');

// Route::get('/films/{id}', 'BookController@show');

// Route::put('/films/{id}', 'BookController@update');

// Route::delete('/films/{id}', 'BookController@destroy');

// Route::get('/films/edit/{id}', 'BookController@edit');
