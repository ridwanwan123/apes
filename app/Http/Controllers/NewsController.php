<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $News = News::all();

        return view('news', ['News' => $News]);
    }

    public function detail($id)
    {
        
        $News = News::find($id);
        
        return view('news-detail', ['News' => $News]);
    }

    public function judul()
    {
        
        $News = News::all();
        
        return view('list-judul', ['News' => $News]);
    }
}
