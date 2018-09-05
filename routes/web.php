<?php


Route::get('/', 'InfoController@index');
Route::get('/prop', 'InfoController@prop');
Route::get('/register', 'InfoController@register');
Route::get('/auth/login', 'InfoController@login');

Auth::routes();


Route::get('users/{id}/proposal', 'InfoController@submit');
Route::get('/admin','admincontroller@index');
route::post('/login/custom',[
'uses'=>'logincontroller@login',
'as' =>'login.custom' 
]);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', 'admincontroller@login')->name('home');
    Route::get('/dashboard', 'savecontroller@index')->name('dashboard');

}
    );
    Route::resource('save', 'savecontroller');
    Route::resource('/store', 'draftcontroller');
    Route::get('logout', function(){
        Auth::logout(); // logout user
        return Redirect::to('/');
    });
    
    Route::get('/infos/{id}', 'savecontroller@show');
    Route::get('/savedestroy/{id}', 'savecontroller@destroy');
    Route::get('/saveaccept/{id}', 'acceptedcontroller@update');
    Route::get('/level1', 'acceptedcontroller@index')->name('level1');
    Route::get('/accepted/{id}', 'acceptedcontroller@show');
    Route::get('/acceptdestroy/{id}', 'acceptedcontroller@destroy');
    Route::get('/propaccept/{id}', 'acceptedcontroller@accepted');
    Route::get('/approved/{id}', 'acceptedcontroller@approved');
    Route::get('/approved', 'acceptedcontroller@gonethrough')->name('approved');
    Route::get('/rejected/{id}', 'acceptedcontroller@gonethrough');
    Route::get('/deleted', 'acceptedcontroller@deleted')->name('rejected');
    Route::get('/rejected/{id}','acceptedcontroller@singlereject');