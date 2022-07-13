<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PelaporanSeksual;
use App\Models\News;

class DashboardController extends Controller
{
    public function index()
    {
        $PelaporanSeksual = PelaporanSeksual::all();
        return view('admin.dashboard', ['PelaporanSeksual' => $PelaporanSeksual]);
    }


    // public function countNews()
    // {
    //     $News = News::all();
    //     return view('admin.dashboard', ['News' => $News]);
    // }


}
