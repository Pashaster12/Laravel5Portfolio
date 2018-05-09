<?php

namespace App\Http\Controllers;

use Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Блог',
            'description' => 'Наши новости и полезные статьи'
        ];
        
        $data['breadcrumbs'] = Request::get('breadcrumbs');
        
        return view('site.blog', $data);
    }
}
