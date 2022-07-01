@extends('layouts.base')

@section('title', 'Homepage')

   
@section('content')

<!-- HEADER -->
<section class="header pt-lg-60 pb-50">
  <div class="container-fluid">
      <div class="row gap-lg-0 gap-5">
          <div class="col-lg-6 col-12 my-auto">
              <p class=" ">
                  
              </p>
              <h1 class="header-title color-palette-1 fw-bold">
                  LAPORKAN SEGERA <br>
                  <span class="d-sm-inline d-none tx-hero"> JANGAN DIBIARKAN</span>
              </h1>
              <p class="mt-30 mb-40 text-lg color-palette-1">Kami menyediakan platform untuk membantu<br
                      class="d-md-block d-none"> para korban pelecehan seksual
              </p>
              <div class="d-flex flex-lg-row flex-colcontainer-fluidumn gap-4">
                  <a class="btn btn-get text-lg text-white rounded-pill" href="{{ route('form-pelaporan') }}" role="button">LAPORKAN</a>
              </div>
          </div>
          <div class="col-lg-6 col-12 d-lg-block d-none">
              <div class="d-flex justify-content-lg-end justify-content-center me-lg-5">
                  <div class="position-relative" data-aos="zoom-in">
                      <img src="{{ asset('frontend/assets/image/GenderViolence.png') }}" class="img-fluid" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- END HEADER  -->

<!-- PROSES PELAPORAN -->
<section id="pelaporan" class="pelaporan pt-50 pb-50 ">
  <div class="container-fluid">
      <h2 class="text-4xl fw-bold color-palette-1 text-center mb-30">Mudah <br>Proses Pelaporan
      </h2>
      <div class="row gap-lg-0 gap-4" data-aos="fade-up">
          <div class="col-lg-4">
              <div class="card pelaporan-card border-0">
                  <img src="{{ asset('frontend/assets/image/icon1.png') }}" width="80px" alt="" srcset="">
                  <p class="fw-semibold text-2xl mb-2 mt-3 color-palette-1">1. Isi Formulir</p>
                  <p class="text-lg color-palette-1 mb-0">Isi data dengan benar dan jujur</p>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="card pelaporan-card border-0">
                  <img src="{{ asset('frontend/assets/image/icon2.png') }}" width="80px" alt="" srcset="">
                  <p class="fw-semibold text-2xl mb-2 mt-3 color-palette-1">2. Valid</p>
                  <p class="text-lg color-palette-1 mb-0">Mendapatkan Feedback</p>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="card pelaporan-card border-0">
                  <img src="{{ asset('frontend/assets/image/icon3.png') }}" width="80px" alt="" srcset="">
                  <p class="fw-semibold text-2xl mb-2 mt-3 color-palette-1">3. Tindak Lanjut</p>
                  <p class="text-lg color-palette-1 mb-0">Tindakan Selanjutnya harus dilakukan</p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- END PROSES PELAPORAN  -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients mt-5">
  <div class="container-fluid">
      <h2 class="text-4xl fw-bold color-palette-1 text-center mb-30">Kerja Sama <br>Dengan </h2>
      <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                  <img src="{{ asset('frontend/assets/image/kepolisian.png') }}" class="img-fluid" alt="" width="149px">
              </div>
              <div class="swiper-slide"><img src="{{ asset('frontend/assets/image/komnasham-sm.jpg') }}" class="img-fluid" alt="" width="149px"></div>
              <div class="swiper-slide"><img src="{{ asset('frontend/assets/image/komnasperempuan.jpg') }}" class="img-fluid" alt="" width="149px"></div>
              <div class="swiper-slide"><img src="{{ asset('frontend/assets/image/LBH.jpg') }}" class="img-fluid" alt="" width="149px"></div>
              <div class="swiper-slide"><img src="{{ asset('frontend/assets/image/Logo_Lembaga_Perlindungan_Saksi_dan_Korban.png') }}" class="img-fluid" alt="" width="149px"></div>
            </div>
      </div>
  </div>
</section><!-- End Clients Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq mt-5">
  <div class="container-fluid" data-aos="fade-up">
    <div class="row gy-4">
      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content">
          <h3>Pertanyaan yang sering <strong class="q">Ditanyakan!</strong></h3>
          <p>
            Beberapa Pertanyaan yang kami ringkas dan yang paling sering ditanyakan
          </p>
        </div>

        <div class="accordion accordion-flush" id="faqlist">
          <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                <i class="bi bi-question-circle question-icon"></i>
                 1. Bagaimana cara melapor ?
              </button>
            </h3>
            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                  Anda bisa langsung mengklik button Lapor, Setelah itu isi 
                  semua data yang ada diformulir dengan lengkap agar data
                  bisa diproses                    
               </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                <i class="bi bi-question-circle question-icon"></i>
                  2. Langkah selanjutnya setelah melapor ?
              </button>
            </h3>
            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Menunggu Notif dari pihak admin
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                <i class="bi bi-question-circle question-icon"></i>
                3. Berapa hari estimasi diproses laporan ?
              </button>
            </h3>
            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                3 sampai 5 hari kerja.
              </div>
            </div>
          </div><!-- # Faq item-->
        </div>

      </div>

      <!-- <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img img-faq " 
      style='background-image: url("assets/image/Questions-amico\ 1.png");'>&nbsp;</div> -->
      
      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img-faq">
          <img src="{{ asset('frontend/assets/image/Questions-amico 1.png') }}" alt="" srcset="">
      </div>
    </div>

  </div>
</section><!-- End F.A.Q Section -->

@endsection