@extends('layouts.base')

@section('title', 'Berita Pelecehan Seksual')

   
@section('content')

<main class="container">
    <div class="row g-5">
        <div class="col-md-8">
    
          <article class="blog-post">
            <h2 class="blog-post-title">{{ $News->judul }}</h2>
            <p class="blog-post-meta">{{ $News->publish }}, <strong class="d-inline-block mb-2 text-danger">{{ $News->kategori }}</strong></p>

            <img src="{{ asset('storage/image-news/'.$News->image) }}" width="100%" height="450" alt="" srcset="">
            
            <p class="p-3">
              {{ $News->body }}
            </p>
            
            </article>
            <a href="{{ $News->sumber }}" class="mb-5" style="text-decoration: none; color:black"> 
              <p class="mt-5" style="color: black">Sumber : <strong class="d-inline-block mt-2 text-primary"> {{ $News->sumber }}</strong></p>
            </a>
    
        </div>
    
        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem;">
            
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="fst-italic">APES</h4>
              <p class="mb-0">Aplikasi Pelaporan Pelecehan Sesksual Berbasis Website</p>
            </div>
    
            <div class="p-4 tags">
              <h4 class="fst-italic">News lain</h4>
              <ul class="list-unstyled mb-0">
                <li><a href="#">FIKSI</a></li>
                <li><a href="#">ANIME</a></li>
                <li><a href="#">Action</a></li>
                <li><a href="#">Mistis</a></li>
                <li><a href="#">Dewasa</a></li>
                <li><a href="#">Thiller</a></li>
              </ul>
            </div>
            
          </div>
        </div>

      </div>
</main>

@endsection