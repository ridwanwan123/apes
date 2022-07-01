<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PelaporanSeksualController;

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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

//ADMIN 
Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'auth'])->name('admin.login.auth');

Route::get('/admin/register', [RegisterController::class, 'index'])->name('admin.register');
Route::post('/admin/register', [RegisterController::class, 'store'])->name('admin.register.store');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/pelaporan-pelecehan-seksual', [PelaporanSeksualController::class, 'index'])->name('admin.pelaporan-seksual');

Route::get('/admin/pelaporan-pelecehan-seksual/create', [PelaporanSeksualController::class, 'tambah'])->name('admin.pelaporan-seksual-create');
Route::post('/admin/pelaporan-pelecehan-seksual/store', [PelaporanSeksualController::class, 'store'])->name('admin.pelaporan-seksual-create.store');

Route::get('/admin/pelaporan-pelecehan-seksual/edit/{id}', [PelaporanSeksualController::class, 'edit'])->name('admin.pelaporan-seksual-edit');
Route::put('/admin/pelaporan-pelecehan-seksual/edit/{id}', [PelaporanSeksualController::class, 'update'])->name('admin.pelaporan-seksual-update');

Route::delete('/admin/pelaporan-pelecehan-seksual/delete/{id}', [PelaporanSeksualController::class, 'destroy'] )->name('admin.pelaporan-seksual.destroy');
