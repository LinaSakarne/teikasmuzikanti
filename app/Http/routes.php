<?php


Route::get('lang/{lang}', function ($locale) {
   return redirect('/')->withCookie(cookie()->forever('language', $locale));
 });
        
Route::get('/', function () {
    return view('index');
});

Route::get('/galerija', function () {
    return view('index-1');
});

Route::get('/grupas_info', function () {
    return view('index-2');
});

Route::get('/dalibnieki', function () {
    return view('index-3');
});

Route::get('/pasakumi', function () {
    return view('index-4');
});
Route::get('/atsauksmes', function () {
    return view('index-5');
    
});



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');
});

Route::group(['middleware' => ['web']], function () {   
    
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');
    
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
 });