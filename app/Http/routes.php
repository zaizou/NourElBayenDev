<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('auth/login','BayanController@getLogin');

Route::get('/','BayanController@index');
Route::get('profile','BayanController@profile');
Route::get('registration','BayanRegistrationController@registerUser');


Route::get('about','PagesController@about');

Route::get('contact','PagesController@contact');
Route::get('articles','ArticlesController@index');
Route::get('articles/create','ArticlesController@create');
Route::get('articles/{id}','ArticlesController@show');
Route::post('articles','ArticlesController@store');
Route::get('getReq','PagesController@retour');





Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController'
]);
