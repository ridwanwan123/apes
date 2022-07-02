@extends('layouts.base')

@section('title', 'Berita Pelecehan Seksual')

   
@section('content')

<main class="container">
    <div class="row g-5">
        <div class="col-md-8">
    
          <article class="blog-post">
            <h2 class="blog-post-title">Judul blog post</h2>
            <p class="blog-post-meta">January 1, 2021, <strong class="d-inline-block mb-2 text-danger">Category</strong></p>

            <img src="{{ asset('frontend/assets/image/GenderViolence.png') }}" width="100%" height="450" alt="" srcset="">
            
            <p class="p-3">This is some additional paragraph placeholder content. 
                It has been written to fill the available space and show how a longer snippet of text affects 
                the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the
                 lookout for this exact same string of text.
            </p>
            
            </article>
            <h5 class="mt-5">Sumber : <strong class="d-inline-block mb-2 text-primary">Detik.com</strong></h5>
    
        </div>
    
        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="fst-italic">APES</h4>
              <p class="mb-0">Aplikasi Pelaporan Pelecehan Sesksual Berbasis Website</p>
            </div>
    
            <div class="p-4">
              <h4 class="fst-italic">News lain</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">Judul Berita Ke-1</a></li>
                <li><a href="#">Judul Berita Ke-2</a></li>
                <li><a href="#">Judul Berita Ke-3</a></li>
                <li><a href="#">Judul Berita Ke-4</a></li>
                <li><a href="#">Judul Berita Ke-5</a></li>
              </ol>
            </div>

          </div>
        </div>

      </div>
</main>

@endsection