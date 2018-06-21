<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Кастомные правила маршрутизации
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Роуты админки
Route::middleware('auth')->namespace('Admin')->prefix('admin')->group(function(){
    Route::get('/', 'BlogController@all');
    Route::get('/articles/create', 'BlogController@create');
});

//Роуты витрины сайта
Route::namespace('Site')->group(function(){
    Route::get('/', 'MainController@index');
    Route::middleware('breadcrumbs')->group(function(){
        Route::get('/pricingbox', 'PriceController@index');
        Route::get('/portfolio', 'PortfolioController@index');
        Route::get('/blog', 'BlogController@index');
        Route::get('/contacts', 'ContactController@index');
    });  
    
    //Ajax маршруты
    Route::post('/sendmail', 'Ajax\ContactController@send');
});