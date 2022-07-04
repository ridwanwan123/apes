
@extends('admin.layouts.base')

@section('title', 'Tambah Berita')

   
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> <a href="{{ route('admin.berita-pelecehan') }}" style="color: unset !important"> News </a>/</span> Tambah Data</h4>
            
<div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Tambah Data</h5>
          <small class="text-muted float-end">Apes</small>
        </div>
        
        

        <div class="card-body">
          <form enctype="multipart/form-data" method="POST" action="{{ route('admin.berita-pelecehan-create.store') }}">
                @csrf

                <div class="row g-3 col-lg-12">
                    <div class="col-4 mb-3">
                        <label for="image" class="form-label">Image Berita</label>
                        <input class="form-control" type="file" name="image" id="image" value="{{ old('image') }}">
                    </div>
                </div>

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="judul" class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" id="judul" value="{{ old('judul') }}" name="judul" aria-describedby="judul">
                    </div>
                </div>

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="slug" class="form-label">Slug Berita</label>
                        <input type="text" class="form-control" id="" name="slug" value="{{ old('slug') }}" aria-describedby="lokasi_kejadian">
                    </div>
                </div>

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="body" class="form-label">Konten Berita</label>
                        <textarea class="form-control" id="body" name="body" rows="6">{{ old('bodyy') }}</textarea>
                    </div>
                </div>

                <!-- input -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="sumber" class="form-label">Sumber Berita</label>
                        <input type="text" class="form-control" id="sumber" value="{{ old('sumber') }}" name="sumber" aria-describedby="sumber">
                    </div>
                </div>

                <!-- Input  -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3 ">
                        <label for="publish" class="form-label">Tanggal Berita</label>
                        <input type="date" class="form-control" name="publish" id="publish" value="{{ old('publish') }}">
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