<?php

Route::group(['middleware' => ['web']], function () { 
    
Route::get('lang/{lang}', function ($locale) {
   return redirect('/')->withCookie(cookie()->forever('language', $locale));
 });      
Route::get('/', function () {
    return view('index');
});
Route::get('/dalibnieki', function () {
    return view('index-3');
});

Route::get('galerija', 'PhotoController@index');
Route::post('galerija', 'PhotoController@imageUpload');
Route::get('atsauksmes', 'AtsauksmesController@index');
Route::post('atsauksmes','AtsauksmesController@store');
Route::get('grupas_info','InfoController@index');
Route::post('grupas_info', 'InfoController@store');

Route::get('dzest_atsauksmes' ,'AtsauksmesController@index2');
Route::post('dzest_atsauksmes','AtsauksmesController@deleteAts');
        
Route::get('pasakumi', 'EventController@index');
Route::get('dzest_piedavajumu', 'EventController@index2');
Route::get('ievietot_piedavajumu', 'EventController@index3');
Route::post('dzest_piedavajumu', 'EventController@deleteEvent');
Route::post('ievietot_piedavajumu', 'EventController@store');

Route::get('lietotaji', function(){
    return view('lietotaji');
});
Route::get('register_new', 'AUsersController@index');
Route::get('delete_user', 'AUsersController@index2');
Route::post('register_new', 'AUsersController@store');
Route::post('delete_user','AUsersController@deleteUser');

Route::auth();
Route::get('/', 'HomeController@index');

 });