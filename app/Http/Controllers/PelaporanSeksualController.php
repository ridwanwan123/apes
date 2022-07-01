<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaporanSeksualController extends Controller
{
    public function index()
    {
        return view('form-pelaporan-seksual');
    }

    public function success()
    {
        return view('form-success');
    }

}
