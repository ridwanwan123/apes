<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PelaporanSeksual;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PelaporanSeksualController extends Controller
{
    public function index()
    {
        $PelaporanSeksual = PelaporanSeksual::all();

        return view('admin.pelaporan-seksual', ['PelaporanSeksual' => $PelaporanSeksual]);
    }

    public function tambah()
    {
        return view('admin.pelaporan-seksual-create');
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

        return redirect()->route('admin.pelaporan-seksual');
        
    }

    public function edit($id)
    {
        $PelaporanSeksual = PelaporanSeksual::find($id);
        
        return view('admin.pelaporan-seksual-edit', ['PelaporanSeksual' => $PelaporanSeksual]);
    }

    public function update(Request $request, $id)
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

        $PelaporanSeksual = PelaporanSeksual::find($id);

        if ($request->bukti){
            //save bukti baru
            $bukti = $request->bukti;
            $originalBuktiName = Str::random(10).$bukti->getClientOriginalName();
            $bukti->storeAs('public/alat-bukti', $originalBuktiName);
            $data['bukti'] = $originalBuktiName;

            //delete bukti lama
            Storage::delete('public/alat-bukti/'.$PelaporanSeksual->bukti);
        }

        $PelaporanSeksual->update($data);

        return redirect()->route('admin.pelaporan-seksual');
    }

    public function destroy($id)
    {
        PelaporanSeksual::find($id)->delete();
        return redirect()->route('admin.pelaporan-seksual');
    }
}
