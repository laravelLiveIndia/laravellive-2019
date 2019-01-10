<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return abort(404);
})->name('login');

Route::get('/home', 'HomeController@index')->name('home');
