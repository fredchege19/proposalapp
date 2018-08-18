<?php


Route::get('/', 'infocontroller@index');
Route::get('/prop', 'infocontroller@prop');
Route::get('/register', 'infocontroller@register');
Route::get('/auth/login', 'infocontroller@login');

Auth::routes();


Route::get('users/{id}/proposal', 'infocontroller@submit');
Route::get('/admin','admincontroller@index');
route::post('/login/custom',[
'uses'=>'logincontroller@login',
'as' =>'login.custom' 
]);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', function(){
    return view('home');
    })->name('name');
    Route::get('/dashboard', function(){
        return view('admin.index');
        })->name('dashboard');

}
    );