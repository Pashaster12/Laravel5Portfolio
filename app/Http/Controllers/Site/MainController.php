<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Наша компания',
            'description' => 'Наша компания - самая лучшая в своём роде'
        ];
        
        return view('site.index', $data);
    }
}
