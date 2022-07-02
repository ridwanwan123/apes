<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;


class NewsController extends Controller
{
    public function index()
    {
        $News = News::all();

        return view('admin.news', ['News' => $News]);
    }
}
