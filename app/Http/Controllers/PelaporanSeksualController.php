<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelaporanSeksual;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PelaporanSeksualController extends Controller
{
    public function index()
    {
        return view('form-pelaporan-seksual');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'no_ktp' => 'required|string',
            'email' => 'required|string',
            'nama_pelapor' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'no_telepon' => 'required|string',
            'lokasi_kejadian' => 'required|string',
            'bukti' => 'required|image|mimes:jpeg,jpg,png',
            'dekripsi_pelaku' => 'required|string',
            'kronologi_kejadian' => 'required|string'
        ]);

        $bukti = $request->bukti;
        $originalBuktiName = Str::random(10).$bukti->getClientOriginalName();
        $bukti->storeAs('public/alat-bukti', $originalBuktiName);
        $data['bukti'] = $originalBuktiName;
        $data['status'] = 'Menunggu';

        PelaporanSeksual::create($data);

        return redirect()->route('form-pelaporan.success');
    }

    public function success()
    {
        return view('form-success');
    }

}
