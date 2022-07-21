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
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/formulir.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/success.css') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <title>APES | Form Lapor</title>
    <!-- Logo icon -->
    <link rel="shorcut icon" href="{{ asset('frontend/assets/image/A1.png') }}">
    
</head>
<body>
    <!-- NAVBAR SECTION  -->
    {{-- <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('frontend/assets/image/logo.png') }}" width="150px" alt="" srcset="">
                </a>
            </div>
        </nav>
    </section> --}}
    <!-- END NAVBAR  -->

    <!-- MULAI CONTENT  -->

    {{-- <section id="header" class="header">
        <div class="container-fluid">
            <h2 class="text-4xl fw-bold color-palette-1 mt-30">
                PELAPORAN PELECEHAN SEKSUAL 
            </h2>
            <p class="text-support text-lg col-md-8 color-palette-2">
                Anda dapat mengadukan atau melaporkan kasus pelecehan seksual yang Anda alami sendiri atau dialami orang lain. setelah mengisi data kasus, 
                Anda akan diminta untuk mengisi identitas sebagai pelapor, untuk kepentingan tindak lanjut kasus.
            </p>
        </div>
    </section> --}}

    <!-- FORMULIR  -->
    <section id="formulir" class="formulir">
        <div class="container-fluid">
            <form action="" id="msForm" class="row">
                <div class="card formulir-card mt-5">
                
                
                     <!-- progressbar -->
                     <ul id="progressbar">
                        <li class="text-center" id="tahap1"><strong>Formulir</strong></li>
                        <li class="active text-center" id="tahap2"><strong>Success</strong></li>
                    </ul>
                    <!-- Complete Success Content -->
                    <section class="complete-success mx-auto">
                        <div class="container-fluid">
                            <div class="text-center">
                                <img src="{{ asset('frontend/assets/image/success.png') }}" alt="" srcset="">
                            </div>
                            <div class="pt-70 pb-50">
                                <h2 class="text-4xl fw-bold text-center color-palette-1 mb-10">LAPORAN BERHASIL DISUBMIT</h2>
                                <p class="text-lg text-center color-palette-1 m-0">Hasil akan kami kirim lewat email</p>
                            </div>
                            <div class="button-group d-flex flex-column mx-auto">
                                <a class="btn btn-dashboard fw-medium text-lg text-white rounded-pill mb-16"
                                    href="{{ route('homepage') }}" role="button">Home</a>
                                <a class="btn btn-whatsapp fw-medium text-lg  rounded-pill mb-16"
                                href="{{ route('konsultasi') }}" role="button">Konsultasi</a>
                            </div>
                        </div>
                    </section>

                </div>
            </form>
        </div>
    </section>

    <!-- SELESAI CONTENT  -->
</body>
</html>