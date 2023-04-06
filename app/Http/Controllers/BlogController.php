<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function get()
    {
        return view('blog.index');
    }
}
