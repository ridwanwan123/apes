@extends('admin.layouts.base')

@section('title', 'News')

   
@section('content')
<div class="float-end mt-4">
    {{-- <a href="#" class="btn btn-primary "><i class='bx bxs-report bx-flashing bx-flip-horizontal' ></i>   Download Laporan</a>  --}}
    <a href="{{ route('admin.berita-pelecehan-create') }}" class="btn btn-primary btn-add-now"><i class='bx bxs-add-to-queue bx-flashing'></i>  Tambah Data</a>
</div>

<h4 class="fw-bold py-3 mb-4"> Berita Pelecehan Seksual</h4>

<!-- Striped Rows -->
<div class="card">
<h5 class="card-header">Data Berita Pelecehan Seksual</h5>

<div class="table-responsive text-nowrap">
    <table class="table table-striped">
    <thead>
        <tr>
        <th>#</th>
        <th>Image</th>
        <th class="text-center">Judul</th>
        {{-- <th>Slug</th>
        <th>Konten Berita</th> --}}
        <th>Tanggal Publish</th>
        {{-- <th>Sumber</th> --}}
        {{-- <th>Kategori</th> --}}
        <th><i class='bx bx-cog' ></i></th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        @foreach ($News as $item)
        <tr>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong> {{ $loop->iteration }}</strong></td>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 
            <img src="{{ asset('storage/image-news/'.$item->image) }}" height="50px"> 
        </td>
        <td class="text-center"><span class="badge bg-label-primary m-5 me-3 "> {{ $item->judul }} </span></td>
        {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->slug }} </strong></td>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->body }} </strong></td> --}}
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->publish }} </strong></td>
        
        {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $item->sumber }} </strong></td> --}}
        {{-- <td><span class="badge bg-label-danger me-1"> {{ $item->kategori }} </span></td> --}}
        <td>
            <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('admin.berita-pelecehan-preview', $item->id) }}" style="color:#435971"><i class="bx bx-show-alt me-1"></i> Preview</a>
                <a class="dropdown-item" href="{{ route('admin.berita-pelecehan-edit', $item->id) }}" style="color:#435971"><i class="bx bxs-edit me-1"></i> Edit</a>
                <form method="post" action="{{ route('admin.berita-pelecehan.destroy', $item->id) }}">
                    @method('delete')
                    @csrf
                    <button type="submit" onclick="return confirm('Apakah kamu ingin menghapus data berita?')" style="border: none; background-color:white; color:#435971"> 
                        <i class="bx bx-trash me-1 m-3"></i> Delete</a>
                    </button>   
                  </form>
            </div>
            </div>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</div>


    {{-- {{ $News->links() }} --}}

@endsection