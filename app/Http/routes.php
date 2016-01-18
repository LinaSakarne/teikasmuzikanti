<?php

Route::group(['middleware' => ['web']], function () { 
    
Route::get('lang/{lang}', function ($locale) {
   return redirect('/')->withCookie(cookie()->forever('language', $locale));
 });      
Route::get('/', function () {
    return view('index');
});
Route::get('/galerija', function () {
    return view('index-1');
});

Route::get('/dalibnieki', function () {
    return view('index-3');
});

Route::get('atsauksmes', 'AtsauksmesController@index');
Route::post('atsauksmes','AtsauksmesController@store');
Route::get('grupas_info','InfoController@index');
Route::post('grupas_info', 'InfoController@store');
Route::get('pasakumi', 'EventController@index');
Route::post('pasakumi', 'EventController@store');

Route::auth();
Route::get('/', 'HomeController@index');

 });