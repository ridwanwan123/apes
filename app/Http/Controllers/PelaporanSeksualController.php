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
            'no_ktp' => 'required|string|min:10',
            'email' => 'required|string|email',
            'nama_pelapor' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'no_telepon' => 'required|string',
            'lokasi_kejadian' => 'required|string',
            'bukti' => 'image|mimes:jpeg,jpg,png,webp',
            'dekripsi_pelaku' => 'required|string|min:16',
            'kronologi_kejadian' => 'required|string|min:16'
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
