<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
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
