@extends('layouts.base')

@section('title', 'Berita Pelecehan Seksual')

   
@section('content')

<main class="container-fluid">
        
    <div class="p-4 p-md-3 mb-4 text-danger">
      <div class="col-md-6 px-0">
        <h2 class="display-5 fst-italic fw-bold">Berita Tentang Pelecehan Seksual</h2>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      </div>
    </div>
  
    <div class="row mb-2">
      @foreach ($News as $item)
        <div class="col-md-6">
          <div class="row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-danger">{{ $item->kategori }}</strong>
              <h3 class="mb-0">{{ $item->judul }}</h3>
              <div class="mb-1 text-muted mb-2">{{ $item->publish }}</div>
              <p class="card-text mb-4">{{ $item->slug }}</p>
              <div class="d-md-flex ">
                  <a href="{{ route('berita-pelecehan.detail', $item->id) }}" class="btn btn-primary btn-next p-3"> Read More</a>
              </div>
              <!-- <a href="#" class="stretched-link">Continue reading</a> -->
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="{{ asset('frontend/assets/image/GenderViolence.png') }}" width="250" height="250" alt="" srcset="">
              <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            </div>
          </div>
        </div>
      @endforeach

      {{-- <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-danger">Category</strong>
            <h3 class="mb-0">Judul</h3>
            <div class="mb-1 text-muted">Post Date</div>
            <p class="card-text mb-auto">Slug</p>
            <div class="d-md-flex ">
                <a href="success.html" class="btn btn-primary btn-next p-3"> Read More</a>
            </div>
            <!-- <a href="#" class="stretched-link">Continue reading</a> -->
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="assets/image/GenderViolence.png" width="250" height="250" alt="" srcset="">
            <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          </div>
        </div>
      </div> --}}

    </div>
  
    
  
</main>

@endsection