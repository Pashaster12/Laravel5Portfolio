<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;

class BlogController extends Controller
{
    public function all()
    {
        $data = [];
        return view('admin.blog.list', ['posts' => $data]);
    }
    
    public function create()
    {
        return view('admin.blog.single');
    }
}