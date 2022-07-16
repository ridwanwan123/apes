<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
