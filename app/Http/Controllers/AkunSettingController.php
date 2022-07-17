<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SexualHarassment;

class AkunSettingController extends Controller
{
    public function index()
    {
        return view('akun-setting');
    }

    public function hasilLaporan()
    {
        return view('result-laporan');
    }
}
