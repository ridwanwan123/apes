@extends('layouts.base')

@section('title', 'Statistik')

   
@section('content')

<section id="header" class="header">
    <div class="container-xxl container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 mt-30">
            KONSULTASI DARING
        </h2>
        <p class="text-support text-lg col-md-8 color-palette-2">
            Pelaporan atau korban dapat berkonsultasi kepada para ahli untuk menyembuhkan depresi atau trauma yang mendalam.
        </p>
    </div>
</section>

<!--AHLI KONSULTASI-->

<section id="konsultasi" class="konsultasi pt-50 pb-50 ">
    <div class="container-xxl container-fluid">
        <div class="row gap-lg-0 gap-4" data-aos="fade-up">
            <div class="col-lg-4">
                <div class="card konsultasi-card border-0">
                    <p class="fw-semibold text-2xl mb-2 mt-3 color-palette-1">Ahli Psikologi</p><br>
                    <img src="{{ asset('frontend/assets/image/grup.png') }}" width="200px" alt="" srcset=""><br>
                    <div class="d-grid gap-2 col-6">
                        <a href="#" class="btn btn-success btn-md rounded-pill ">
                            <img src="{{ asset('frontend/assets/image/ic_whatapps.png') }} " class="p-1" alt="" srcset="">
                            Dr. Name
                        </a>
                        <a href="#" class="btn btn-primary btn-md rounded-pill">
                            <img src="{{ asset('frontend/assets/image/ic_telegram.png') }} " class="p-1" alt="" srcset="">
                            Dr. Name
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card konsultasi-card border-0">
                    <p class="fw-semibold text-2xl mb-2 mt-3 color-palette-1">Ahli Rohani</p><br>
                    <img src="{{ asset('frontend/assets/image/grup.png') }}" width="200px" alt="" srcset=""><br>
                    <div class="d-grid gap-2 col-6">
                        <a href="#" class="btn btn-success btn-md rounded-pill ">
                            <img src="{{ asset('frontend/assets/image/ic_whatapps.png') }} " class="p-1" alt="" srcset="">
                            Dr. Name
                        </a>
                        <a href="#" class="btn btn-primary btn-md rounded-pill">
                            <img src="{{ asset('frontend/assets/image/ic_telegram.png') }} " class="p-1" alt="" srcset="">
                            Dr. Name
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card konsultasi-card border-0">
                    <p class="fw-semibold text-2xl mb-2 mt-3 color-palette-1">Ahli Medis</p><br>
                    <img src="{{ asset('frontend/assets/image/grup.png') }}" width="200px" alt="" srcset=""><br>
                    <div class="d-grid gap-2 col-6">
                        <a href="#" class="btn btn-success btn-md rounded-pill ">
                            <img src="{{ asset('frontend/assets/image/ic_whatapps.png') }} " class="p-1" alt="" srcset="">
                            Dr. Name
                        </a>
                        <a href="#" class="btn btn-primary btn-md rounded-pill">
                            <img src="{{ asset('frontend/assets/image/ic_telegram.png') }} " class="p-1" alt="" srcset="">
                            Dr. Name
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card konsultasi-card border-0">
                    <br><br>
                    <p class="fw-semibold text-2xl mb-2 mt-3 color-palette-1">Ahli Hukum</p><br>
                    <img src="{{ asset('frontend/assets/image/grup.png') }}" width="200px" alt="" srcset=""><br>
                    <div class="d-grid gap-2 col-6">
                        <a href="https://wa.me/6281381752590" class="btn btn-success btn-md rounded-pill ">
                            <img src="{{ asset('frontend/assets/image/ic_whatapps.png') }} " class="p-1" alt="" srcset="">
                            Dr. Name
                        </a>
                        <a href="#" class="btn btn-primary btn-md rounded-pill">
                            <img src="{{ asset('frontend/assets/image/ic_telegram.png') }} " class="p-1" alt="" srcset="">
                            Dr. Name
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>


@endsection