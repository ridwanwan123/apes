@extends('layouts.base')

@section('title', 'Statistik')

   
@section('content')

<section id="header" class="header">
    <div class="container-xxl container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 mt-30">
            DATA KASUS PELECEHAN SEKSUAL
        </h2>
        <p class="text-support text-lg col-md-8 color-palette-2">
            Data yang telah kami kumpulkan dari hasil riset
        </p>
    </div>
</section>

<section class="statistik pt-50 pb-50">
    <div class="container-xxl container-fluid">
        <div class="card statistik-card border-0 col-md-3">
            <h2 class="fw-semibold color-palette-1">Total Kasus</h2> <hr>
            <div class="row">
                <div class="col">
                    <h1 class="fw-bold color-palette-1 mt-3">2363</h1>
                </div>
                <div class="col">
                    <img src="{{ asset('frontend/assets/image/Vector.png') }}" width="80px" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Chart -->                
<section class="container-xxl container-fluid ">
    <div class="mt-5 ml-2">                    
        <h3 class="text-4xl fw-bold color-palette-1 mt-30" style="color: #0C145A; font-size: 20px;">DATA KASUS PELECEHAN SEKSUAL PERTAHUN</h3>                                                            
    </div>
    <div class="graphBox" >
        <div class="box" style="background-color: #F9FAFF;">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</section> 

@endsection