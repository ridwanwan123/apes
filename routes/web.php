<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PelaporanSeksualController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

use App\Http\Controllers\PelaporanSeksualController as PelaporanController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AkunSettingController;
use App\Http\Controllers\RegisterController as RegistrasiPelaporController;
use App\Http\Controllers\LoginPelaporController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

//ADMIN 
Route::get('/admin/login', [LoginController::class, 'index'])->middleware('guest')->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/register', [RegisterController::class, 'index'])->name('admin.register');
Route::post('/admin/register', [RegisterController::class, 'store'])->name('admin.register.store');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// ADMIN->PELAPORAN 
Route::get('/admin/pelaporan-pelecehan-seksual', [PelaporanSeksualController::class, 'index'])->name('admin.pelaporan-seksual');

Route::get('/admin/pelaporan-pelecehan-seksual/create', [PelaporanSeksualController::class, 'tambah'])->name('admin.pelaporan-seksual-create');
Route::post('/admin/pelaporan-pelecehan-seksual/store', [PelaporanSeksualController::class, 'store'])->name('admin.pelaporan-seksual-create.store');

Route::get('/admin/pelaporan-pelecehan-seksual/preview/{id}', [PelaporanSeksualController::class, 'show'])->name('admin.pelaporan-seksual-preview');

Route::get('/admin/pelaporan-pelecehan-seksual/verify/{id}', [PelaporanSeksualController::class, 'edit'])->name('admin.pelaporan-seksual-verify');
Route::put('/admin/pelaporan-pelecehan-seksual/verify/{id}', [PelaporanSeksualController::class, 'update'])->name('admin.pelaporan-seksual-update');

Route::delete('/admin/pelaporan-pelecehan-seksual/delete/{id}', [PelaporanSeksualController::class, 'destroy'] )->name('admin.pelaporan-seksual.destroy');

// ADMIN->BERITA 
Route::get('/admin/berita-pelecehan-seksual', [AdminNewsController::class, 'index'])->name('admin.berita-pelecehan');

Route::get('/admin/berita-pelecehan-seksual/create', [AdminNewsController::class, 'tambah'])->name('admin.berita-pelecehan-create');
Route::post('/admin/berita-pelecehan-seksual/store', [AdminNewsController::class, 'store'])->name('admin.berita-pelecehan-create.store');

Route::get('/admin/berita-pelecehan-seksual/preview/{id}', [AdminNewsController::class, 'show'])->name('admin.berita-pelecehan-preview');

Route::get('/admin/berita-pelecehan-seksual/edit/{id}', [AdminNewsController::class, 'edit'])->name('admin.berita-pelecehan-edit');
Route::put('/admin/berita-pelecehan-seksual/edit/{id}', [AdminNewsController::class, 'update'])->name('admin.berita-pelecehan-edit.update');

Route::delete('/admin/berita-pelecehan-seksual/delete/{id}', [AdminNewsController::class, 'destroy'])->name('admin.berita-pelecehan.destroy');




//HALAMAN UTAMA
//REGISTRASI AKUN
Route::get('/registrasi',[RegistrasiPelaporController::class, 'index'])->name('registrasi');
Route::post('/registrasi',[RegistrasiPelaporController::class, 'store'])->name('registrasi.store');


Route::get('/login', [LoginPelaporController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginPelaporController::class, 'auth'])->name('login.auth');




//PROFILE AKUN
Route::get('/akun-setting', [AkunSettingController::class, 'index'])->name('akun-setting');


//FORMULIR
Route::get('/form-pelaporan-pelecehan-seksual', [PelaporanController::class, 'index'])->name('form-pelaporan');
Route::post('/form-pelaporan-pelecehan-seksual/store', [PelaporanController::class, 'store'])->name('form-pelaporan.store');
Route::get('/form-pelaporan-pelecehan-seksual/success', [PelaporanController::class, 'success'])->name('form-pelaporan.success');


//BERITA
Route::get('/berita-pelecehan-seksual', [NewsController::class, 'index'])->name('berita-pelecehan');
Route::get('/berita-pelecehan-seksual/{id}', [NewsController::class, 'detail'])->name('berita-pelecehan.detail');



