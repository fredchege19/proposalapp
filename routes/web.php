<?php


Route::get('/', 'infocontroller@index');
Route::get('/prop', 'infocontroller@prop');
Route::get('/register', 'infocontroller@register');
Route::get('/auth/login', 'infocontroller@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/{id}/proposal', 'infocontroller@submit');
