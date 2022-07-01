<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- Vender Css  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/utilites.css') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <title>APES | Home</title>
    <!-- Logo icon -->
    <link rel="shorcut icon" href="{{ asset('frontend/assets/image/A1.png') }}">
    
</head>
<body>
    <!-- NAVBAR SECTION  -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white pt-lg-40 pb-lg-40 pt-30 pb-50">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('frontend/assets/image/logo.png') }}" width="150px" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto text-lg gap-lg-0 gap-2">
                        <li class="nav-item my-auto">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="nav-link" href="statistik.html">Statistik</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="nav-link" href="konsultasi.html">Konsultasi</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="btn btn-lapor d-flex justify-content-center ms-lg-2"
                                href="formulir.html" role="button">Lapor</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- END NAVBAR  -->

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
                        <a class="btn btn-get text-lg text-white rounded-pill" href="formulir.html" role="button">LAPORKAN</a>
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

    <!-- MULAI CONTENT  -->

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
    <!-- AKHIR CONTENT  -->

    <!-- Footer -->
    <section class="footer pt-50">
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 text-lg-start text-center">
                        <a href="index.html" class="mb-30">
                            <img src="{{ asset('frontend/assets/image/logo.png') }}" width="150px" alt="" srcset="">
                        </a>
                        <p class="mt-30 text-lg color-palette-1 mb-30">Membantu para korban untuk melapor pelecehan seksual</p>
                        <!-- <p class="mt-30 text-lg color-palette-1 mb-30">Copyright 2021. All Rights Reserved.</p> -->
                    </div>
                    <div class="col-lg-8 mt-lg-0 mt-20">
                        <div class="row gap-sm-0">
                            <div class="col-md-4 col-6 mb-lg-0 mb-25">
                                <p class="text-lg fw-semibold color-palette-1 mb-12">Company</p>
                                <ul class="list-unstyled">
                                    <li class="mb-6">
                                        <a href="" class="text-lg color-palette-1 text-decoration-none">About Us</a>
                                    </li>
                                    <li class="mb-6">
                                        <a href="" class="text-lg color-palette-1 text-decoration-none">Terms of Use</a>
                                    </li>
                                    <li class="mb-6">
                                        <a href="" class="text-lg color-palette-1 text-decoration-none">Privacy &
                                            Policy</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-6 mb-lg-0 mb-25">
                                <p class="text-lg fw-semibold color-palette-1 mb-12">Contact Us</p>
                                <ul class="list-unstyled">
                                    <li class="mb-6">
                                        <a href="" class="text-lg color-palette-1 text-decoration-none">+62813 8175 2591</a>
                                    </li>
                                    <li class="mb-6">
                                        <a href="" class="text-lg color-palette-1 text-decoration-none">Apes.id@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-12 mt-lg-0 mt-md-0 mt-25">
                                <p class="text-lg fw-semibold color-palette-1 mb-12">Connect</p>
                                <ul class="list-unstyled">
                                    <li class="mb-6">
                                        <a href="#" class="text-lg color-palette-1 text-decoration-none">
                                            Kepolisian
                                        </a>
                                    </li>
                                    <li class="mb-6">
                                        <a href="#" class="text-lg color-palette-1 text-decoration-none">
                                            Lembaga Bantuan Hukum
                                        </a>
                                    </li>
                                    <li class="mb-6">
                                        <a href="#" class="text-lg color-palette-1 text-decoration-none">
                                            Komnas Perempuan
                                        </a>
                                    </li>
                                    <li class="mb-6">
                                        <a href="#" class="text-lg color-palette-1 text-decoration-none">
                                            Komnas Ham
                                        </a>
                                    </li>
                                    <li class="mb-6">
                                        <a href="#" class="text-lg color-palette-1 text-decoration-none">
                                            Lembaga perlindungan saksi dan korban
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

</body>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- vendor js -->
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- AOS Animation -->
    <script>
        AOS.init();
    </script>
</html>
