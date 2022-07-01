
@extends('admin.layouts.base')

@section('title', 'Tambah Pelaporan')

   
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> <a href="{{ route('admin.pelaporan-seksual') }}" style="color: unset !important"> Pelaporan Seksual </a>/</span> Tambah Data</h4>
            
<div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Tambah Data</h5>
          <small class="text-muted float-end">Apes</small>
        </div>
        
        

        <div class="card-body">
          <form enctype="multipart/form-data" method="POST" action="{{ route('admin.pelaporan-seksual-create.store') }}">
                @csrf
                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="no_ktp" class="form-label">NOMOR KTP / NOMOR IDENTITAS</label>
                        <input type="number" class="form-control" id="no_ktp" value="{{ old('no_ktp') }}" name="no_ktp" aria-describedby="no_ktp">
                    </div>
                </div>

                <!-- Input  -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3 ">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" aria-describedby="email">
                    </div>
                    <div class="col mb-3 ">
                        <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
                        <input type="nama_pelapor" class="form-control" id="nama_pelapor" value="{{ old('nama_pelapor') }}" name="nama_pelapor" aria-describedby="nama_pelapor">
                    </div>
                </div>

                <!-- Input  -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3 ">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                    </div>
                    <div class="col mb-3 ">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" id="alamat" aria-describedby="alamat">
                    </div>
                </div>

                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="" class="form-label">Jenis Kelamin</label>
                        <div class="form-check m-2">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki">
                            <label class="form-check-label" for="jenis_kelamin1">
                              Laki-laki
                            </label>
                        </div>
                        <div class="form-check m-2">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
                            <label class="form-check-label" for="jenis_kelamin2">
                              Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <label for="no_telepon" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="" name="no_telepon" value="{{ old('no_telepon') }}" aria-describedby="no_telepon">
                    </div>
                </div>
                

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col-4 mb-3">
                        <label for="lokasi_kejadian" class="form-label">Lokasi Kejadian</label>
                        <input type="text" class="form-control" id="" name="lokasi_kejadian" value="{{ old('lokasi_kejadian') }}" aria-describedby="lokasi_kejadian">
                    </div>
                </div>

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col-4 mb-3">
                        <label for="bukti" class="form-label">Bukti (Wajib)</label>
                        <input class="form-control" type="file" name="bukti" id="bukti" value="{{ old('bukti') }}">
                    </div>
                </div>

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="dekripsi_pelaku" class="form-label">Deskripsi Pelaku</label>
                        <textarea class="form-control" id="dekripsi_pelaku" name="dekripsi_pelaku" rows="6">{{ old('dekripsi_pelaku') }}</textarea>
                    </div>
                </div>


                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="kronologi_kejadian" class="form-label">Kronologi Kejadian</label>
                        <textarea class="form-control" id="kronologi_kejadian" name="kronologi_kejadian" rows="6">{{ old('kronologi_kejadian') }}</textarea>
                    </div>
                </div>
                
                <!-- BUTTON  -->
                <div class="d-flex justify-content-md-end mt-3">
                    <button type="submit" class="mt-1 btn btn-primary d-grid p-3 m-3">
                        <span class="font-semibold text-white text-base">Tambah Data</span>
                    </button>
                </div>
                  
          </form>
        </div>
      </div>
  
</div>

@endsection