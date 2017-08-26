<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Контакты',
            'description' => 'Свяжитесь с нами'
        ];
        
        $data['breadcrumbs'] = \Request::get('breadcrumbs');
        
        return view('contacts', $data);
    }
}
