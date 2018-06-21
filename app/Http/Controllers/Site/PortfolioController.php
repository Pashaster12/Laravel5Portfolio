<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Портфолио',
            'description' => 'Наши лучшие работы'
        ];
        
        $data['breadcrumbs'] = Request::get('breadcrumbs');
        
        return view('site.portfolio', $data);
    }
}
