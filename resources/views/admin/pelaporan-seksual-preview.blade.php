
@extends('admin.layouts.base')

@section('title', 'Preview Pelaporan')

   
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> <a href="{{ route('admin.pelaporan-seksual') }}" style="color: unset !important"> Pelaporan Seksual </a>/</span> Preview Data</h4>
            
<div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Preview Data</h5>
          <small class="text-muted float-end">Apes</small>
        </div>
        

        <div class="card-body">
          <form enctype="multipart/form-data" method="POST" action="{{ route('admin.pelaporan-seksual-update', $PelaporanSeksual->id) }}">
                @method('PUT')
                @csrf

                <!-- STATUS LAPORAN -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3 ">
                        <label for="status" class="form-label">STATUS LAPORAN</label>
                        <div class="col">
                            @if ($PelaporanSeksual->status == 'MENUNGGU')
                                <span class="badge fs-3 bg-label-warning me-1"> {{ $PelaporanSeksual->status }}</span>
                            @elseif ($PelaporanSeksual->status == 'LAPORAN DITERIMA')
                                <span class="badge fs-3 bg-label-primary me-1"> {{ $PelaporanSeksual->status }}</span>
                            @elseif ($PelaporanSeksual->status == 'LAPORAN DITOLAK')
                                <span class="badge fs-3 bg-label-danger me-1"> {{ $PelaporanSeksual->status }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    {{-- <input type="hidden" value="{{ $PelaporanSeksual->id }}" name="{{ $PelaporanSeksual->id }}"> --}}
                    <div class="col mb-3 mt-5">
                        <label for="no_ktp" class="form-label">NOMOR KTP / NOMOR IDENTITAS</label>
                        <input type="number" class="form-control" id="" value="{{ $PelaporanSeksual->no_ktp }}" name="no_ktp" aria-describedby="no_ktp" disabled>
                    </div>
                </div>

                <!-- Input  -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3 ">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" value="{{ $PelaporanSeksual->email }}" name="email" aria-describedby="email" disabled>
                    </div>
                    <div class="col mb-3 ">
                        <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
                        <input type="nama_pelapor" class="form-control" value="{{ $PelaporanSeksual->nama_pelapor }}" id="nama_pelapor" name="nama_pelapor" aria-describedby="nama_pelapor" disabled>
                    </div>
                </div>

                <!-- Input  -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3 ">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" value="{{ $PelaporanSeksual->tanggal_lahir }}" name="tanggal_lahir" id="tanggal_lahir" disabled>
                    </div>
                    <div class="col mb-3 ">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" value="{{ $PelaporanSeksual->alamat }}" name="alamat" id="alamat" aria-describedby="alamat" disabled>
                    </div>
                </div>

                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="" class="form-label">Jenis Kelamin</label>
                        <div class="form-check m-2">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" {{ $PelaporanSeksual->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }} disabled>
                            <label class="form-check-label" for="jenis_kelamin">
                              Laki-laki
                            </label>
                        </div>
                        <div class="form-check m-2">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" {{ $PelaporanSeksual->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} disabled>
                            <label class="form-check-label" for="jenis_kelamin">
                              Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <label for="no_telepon" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="" value="{{ $PelaporanSeksual->no_telepon }}" name="no_telepon" aria-describedby="no_telepon" disabled>
                    </div>
                </div>
                

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col-4 mb-3">
                        <label for="lokasi_kejadian" class="form-label">Lokasi Kejadian</label>
                        <input type="text" class="form-control" id="" value="{{ $PelaporanSeksual->lokasi_kejadian }}" name="lokasi_kejadian" aria-describedby="lokasi_kejadian" disabled>
                    </div>
                </div>

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <label for="bukti" class="form-label">Bukti (Wajib)</label>
                    <div class="col mb-3">
                        <img src="{{ asset('storage/alat-bukti/'.$PelaporanSeksual->bukti) }}" width="30%">
                        {{-- <input class="form-control mt-3" type="file" value="{{ $PelaporanSeksual->bukti }}" name="bukti" id="bukti" disabled> --}}
                    </div>
                </div>

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="dekripsi_pelaku" class="form-label">Deskripsi Pelaku</label>
                        <textarea class="form-control" id="dekripsi_pelaku" name="dekripsi_pelaku" rows="6" disabled> {{ $PelaporanSeksual->dekripsi_pelaku }}</textarea>
                    </div>
                </div>


                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="kronologi_kejadian" class="form-label">Kronologi Kejadian</label>
                        <textarea class="form-control" id="kronologi_kejadian"  name="kronologi_kejadian" rows="6" disabled>{{ $PelaporanSeksual->kronologi_kejadian }}</textarea>
                    </div>
                </div>
                
                <!-- BUTTON  -->
                  
                
          </form>
        </div>
      </div>
  
</div>

@endsection