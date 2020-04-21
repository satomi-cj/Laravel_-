<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        //「投稿日時順に新しい方から並べる」という並べ換え
        $posts = News::all()->sortByDesc('update_at');
        
        if (count($posts) > 0) {
            $headline =$posts->shift();
        } else {
            $headline = null;
        }
        
        return view('news.index', ['headline' => $headline, 'posts' => $posts]);
    }
}
