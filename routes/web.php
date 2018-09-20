<?php


Route::get('/', 'InfoController@index')->name('start');
Route::get('/drafts', 'savecontroller@drafts');
Route::get('/prop', 'InfoController@prop');
Route::get('/register', 'InfoController@register');
Route::get('/submit/{id}', 'savecontroller@submit');
Route::get('/auth/login', 'InfoController@login');
Route::group(['middleware' => 'prevent-back-history'],function(){
    
    Route::get('/success/{id}', 'savecontroller@success')->name('success');
  });

Auth::routes();
Route::get('/view/{id}', 'savecontroller@view');
Route::get('/emailread', 'savecontroller@verified')->name('emailread');
Route::get('/verified/{token}', 'verifycontroller@verify')->name('verified');
Route::get('/verify/{token}', 'verifycontroller@verify');
Route::get('users/{id}/proposal', 'InfoController@submit');
Route::get('prop/{id}', 'savecontroller@pop');
Route::get('/admin','admincontroller@index');
Route::get('/viewd/{id}', 'savecontroller@draftview');
Route::get('/drafts','savecontroller@drafts');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
route::post('/login/custom',[
'uses'=>'logincontroller@login',
'as' =>'login.custom' 
]);

Route::get('/apply','admincontroller@apply');
Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', 'savecontroller@index')->name('dashboard');
    Route::get('/success', 'savecontroller@success')->name('home');
    Route::get('protected',['middleware' => ['auth', 'admin'], function() {
        
        return redirect()->route('dashboard');
        
    }]);
    Route::get('/new', 'savecontroller@newme')->name('notv');

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

  