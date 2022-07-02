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
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('frontend/assets/image/logo.png') }}" width="150px" alt="" srcset="">
                </a>
            </div>
        </nav>
    </section>
    <!-- END NAVBAR  -->

    <!-- MULAI CONTENT  -->

    <section id="header" class="header">
        <div class="container-fluid">
            <h2 class="text-4xl fw-bold color-palette-1 mt-30">
                PELAPORAN PELECEHAN SEKSUAL 
            </h2>
            <p class="text-support text-lg col-md-8 color-palette-2">
                Anda dapat mengadukan atau melaporkan kasus pelecehan seksual yang Anda alami sendiri atau dialami orang lain. setelah mengisi data kasus, 
                Anda akan diminta untuk mengisi identitas sebagai pelapor, untuk kepentingan tindak lanjut kasus.
            </p>
        </div>
    </section>

    <!-- FORMULIR  -->
    <section id="formulir" class="formulir">
        <div class="container-fluid">
            <form action="{{ route('form-pelaporan.store') }}" id="msForm" class="row" enctype="multipart/form-data" method="POST">
                <div class="card formulir-card mt-5">
                     <!-- progressbar -->
                     <ul id="progressbar">
                        <li class="active text-center" id="tahap1"><strong>Tahap 1</strong></li>
                        <li class="text-center" id="tahap2"><strong>Tahap 2</strong></li>
                    </ul>
                    <hr>    
                
                    <!-- Input  -->
                    <div class="row gap-lg-0 gap-5">
                        <div class="col-lg-12 col-12 my-auto">
                            <p class=" "></p>
                            <h1 class="header-title color-palette-1 fw-bold">Formulir Pelaporan</h1>
                            <p class="mt-30 mb-40 text-lg color-palette-2">Di harap mengisi data dengan baik dan jujur</p>
                        </div>

                        @csrf
                        <!-- input -->
                        <div class="row g-3 col-lg-12">
                            <div class="col mb-3">
                                <label for="no_ktp" class="form-label">Nomor KTP / Nomor Identitas</label>
                                <input type="number" class="form-control" id="no_ktp" value="{{ old('no_ktp') }}" name="no_ktp" aria-describedby="no_ktp">
                            </div>
                        </div>

                        <!-- Input  -->
                        <div class="row g-3 col-lg-12">
                            <div class="col mb-3 ">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" aria-describedby="email">
                            </div>
                            <div class="col mb-3 ">
                                <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
                                <input type="nama_pelapor" class="form-control" id="nama_pelapor" value="{{ old('nama_pelapor') }}" name="nama_pelapor" aria-describedby="nama_pelapor">
                            </div>
                        </div>

                        <!-- Input  -->
                        <div class="row g-3 col-lg-12">
                            <div class="col mb-3 ">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                            </div>
                            <div class="col mb-3 ">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" id="alamat" aria-describedby="alamat">
                            </div>
                        </div>

                        <div class="row g-3 col-lg-12">
                            <div class="col mb-3">
                                <label for="" class="form-label">Jenis Kelamin</label>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki">
                                    <label class="form-check-label" for="jenis_kelamin1">
                                    Laki-laki
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
                                    <label class="form-check-label" for="jenis_kelamin2">
                                    Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label for="no_telepon" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="" name="no_telepon" value="{{ old('no_telepon') }}" aria-describedby="no_telepon">
                            </div>
                        </div>
                        

                        <!-- input -->
                        <div class="row g-3 col-lg-12">
                            <div class="col-4 mb-3">
                                <label for="lokasi_kejadian" class="form-label">Lokasi Kejadian</label>
                                <input type="text" class="form-control" id="" name="lokasi_kejadian" value="{{ old('lokasi_kejadian') }}" aria-describedby="lokasi_kejadian">
                            </div>
                        </div>

                        <!-- input -->
                        <div class="row g-3 col-lg-12">
                            <div class="col-4 mb-3">
                                <label for="bukti" class="form-label">Bukti (Foto)</label>
                                <input class="form-control" type="file" name="bukti" id="bukti" value="{{ old('bukti') }}">
                            </div>
                        </div>

                        <!-- input -->
                        <div class="row g-3 col-lg-12">
                            <div class="col mb-3">
                                <label for="dekripsi_pelaku" class="form-label">Deskripsi Pelaku</label>
                                <textarea class="form-control" id="dekripsi_pelaku" name="dekripsi_pelaku" rows="6">{{ old('dekripsi_pelaku') }}</textarea>
                            </div>
                        </div>


                        <!-- input -->
                        <div class="row g-3 col-lg-12">
                            <div class="col mb-3">
                                <label for="kronologi_kejadian" class="form-label">Kronologi Kejadian</label>
                                <textarea class="form-control" id="kronologi_kejadian" name="kronologi_kejadian" rows="6">{{ old('kronologi_kejadian') }}</textarea>
                            </div>
                        </div>
                    

                        <!-- BUTTON  -->
                        <div class="d-md-flex justify-content-md-end mt-5">
                            <button type="submit" class="mt-1 btn btn-next d-grid p-3 m-3">
                                <span class="font-semibold text-base">Submit Laporan</span>
                            </button>
                        </div>
                        


                    </div>

                </div>
            </form>
        </div>
    </section>

    <!-- SELESAI CONTENT  -->
</body>
</html>