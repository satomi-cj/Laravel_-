<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function add()
    {
        // dd("aa");
        return view("admin.news.create");
    }
    
    public function create(Request $request)
    {
        return redirect('admin/news/create');
    }
}
