<?php

/*
by Gentle Programmer +2347064229453
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('welcome','ActionController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
