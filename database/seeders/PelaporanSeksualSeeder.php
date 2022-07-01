<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PelaporanSeksualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelaporan_seksual')->insert([
            'no_ktp' =>'1907411001',
            'email' => 'pelaporpertama@gmail.com',
            'nama_pelapor' => 'Fulan',
            'tanggal_lahir' => '2000-01-01',
            'alamat' => 'Graha Unilever. Jl. Jend. Gatot Subroto Kav. 15. Jakarta 12930, Indonesia.',
            'jenis_kelamin' => 'Laki-laki',
            'no_telepon' => '084123123199',
            'lokasi_kejadian' => 'Kereta Api',
            'bukti' => 'Gambar1',
            'dekripsi_pelaku' => 'Gendut Berewok',
            'kronologi_kejadian' => Str::random(30),
            'status' => 'Menunggu',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
