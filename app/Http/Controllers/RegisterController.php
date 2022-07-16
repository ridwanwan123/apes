<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SexualHarassment;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registrasi-pelapor');
    }
    public function store(Request $request)
    {
        $request->validate([
            'no_ktp' => 'required|string|min:10',
            'email' => 'required|string|email',
            'password' => 'required|string',
            'nama_pelapor' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'no_telepon' => 'required|string',
            'lokasi_kejadian' => 'string',
            'bukti' => 'image|mimes:jpeg,jpg,png,webp',
            'dekripsi_pelaku' => 'string|min:16',
            'kronologi_kejadian' => 'string|min:16'
        ]);

        $data = $request->except('_token');

        $isEmailExist = SexualHarassment::where('email', $request->email)->exists();

        if ($isEmailExist) {
            return back()
                ->withErrors([
                    'email' => 'This email already exists'
                ])
                ->withInput();
        }

        $data['password'] = Hash::make($request->password);

        SexualHarassment::create($data);

        // $request->session()->flash('success', 'Registration successfully!! Please Login');

        return redirect()->route('login')->with('success', 'Registration successfully!! Please Login');
    }
}
