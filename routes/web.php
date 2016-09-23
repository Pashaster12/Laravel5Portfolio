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

Route::get('/', function () {
    $data = array('description' => 'Moderna - Главная страница', 
                  'title' => 'Moderna - Главная страница');
    return view('index', $data);
});

Route::get('/{page}', function ($page) {
    $data = array('description' => 'Moderna - ' . $page, 
                  'title' => 'Moderna - ' . $page);
    $data['breadcrumbs'] = Request::Get('breadcrumbs');
    
    return view($page, $data);
})->middleware('breadcrumbs');
