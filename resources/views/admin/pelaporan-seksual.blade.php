@extends('admin.layouts.base')

@section('title', 'Pelaporan')

   
@section('content')
<div class="float-end mt-4">
    {{-- <a href="#" class="btn btn-primary "><i class='bx bxs-report bx-flashing bx-flip-horizontal' ></i>   Download Laporan</a>  --}}
    {{-- <a href="{{ route('admin.pelaporan-seksual-create') }}" class="btn btn-primary btn-add-now"><i class='bx bxs-add-to-queue bx-flashing'></i>  Tambah Data</a> --}}
</div>

<h4 class="fw-bold py-3 mb-4"> Pelaporan Pelecehan Seksual</h4>

<!-- Striped Rows -->
<div class="card">
<h5 class="card-header">Data Pelaporan Pelecehan Seksual</h5>

<div class="table-responsive text-nowrap">
    <table class="table table-striped">
    <thead>
        <tr>
        <th>#</th>
        <th>KTP</th>
        <th>Email</th>
        <th>Nama Pelapor</th>
        {{-- <th>Tanggal lahir</th>
        <th>Alamat Pelapor</th> --}}
        <th>Jenis Kelamin</th>
        <th>No Telepon</th>
        {{-- <th>Lokasi Kejadian</th>
        <th>Bukti</th>
        <th><i class="m-3"></i>  Deskripsi Pelaku</th>
        <th>Kronologi Kejadian</th> --}}
        <th>Status</th>
        <th><i class='bx bx-cog' ></i></th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        @foreach ($PelaporanSeksual as $item)
        <tr>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong> {{ $loop->iteration }}</strong></td>
        <td><span class="badge bg-label-primary me-1"> {{ $item->no_ktp }}</span></td>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->email }}</strong></td>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->nama_pelapor }}</strong></td>
        {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->tanggal_lahir }}</strong></td>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->alamat }}</strong></td> --}}
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->jenis_kelamin }}</strong></td>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->no_telepon }}</strong></td>
        {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->lokasi_kejadian }}</strong></td>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 
            <img src="{{ asset('storage/alat-bukti/'.$item->bukti) }}" width="200%"> 
        </td>
        <td><i class="fab fa-angular fa-lg text-danger m-3 me-3"></i> <strong> {{ $item->dekripsi_pelaku }}</strong></td>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->kronologi_kejadian }}</strong></td> --}}
        <td><span class="badge bg-label-warning me-1"> {{ $item->status }}</span></td>
        <td>
            <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('admin.pelaporan-seksual-preview', $item->id) }}" style="color:#435971"><i class="bx bx-show-alt me-1"></i> Preview</a>
                <form method="post" action="{{ route('admin.pelaporan-seksual.destroy', $item->id) }}">

                    @method('delete')
                    @csrf
                    <button type="submit" style="border: none; background-color:white; color:#435971"> 
                        <i class="bx bx-trash me-1 m-3"></i> Delete</a>
                    </button>   
                  </form>
                

                <a class="dropdown-item" href="#" style="color:#435971"><i class="bx bx-check me-1"></i> Verify</a>
            </div>
            </div>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</div>
  

@endsection