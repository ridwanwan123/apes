<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SexualHarassment;

class AkunSettingController extends Controller
{
    public function statistik()
    {
        return view('statistik');
    }

    public function konsul()
    {
        return view('konsultasi');
    }

    public function team()
    {
        return view('teamApes');
    }
}
