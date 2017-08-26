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

Route::get('/', 'MainController@index');

Route::group(['middleware' => 'breadcrumbs'], function(){
    Route::get('/pricingbox', 'PriceController@index');
    Route::get('/portfolio', 'PortfolioController@index');
    Route::get('/blog', 'BlogController@index');
    Route::get('/contacts', 'ContactController@index');
});

//Ajax routes
Route::post('/sendmail', 'Ajax\ContactController@send');