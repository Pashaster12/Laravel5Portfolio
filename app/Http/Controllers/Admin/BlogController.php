<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;

class BlogController extends Controller
{
    public function all()
    {
        return view('admin.blog.post_list');
    }
    
    public function create()
    {
        return view('admin.blog.post_single');
    }
}
