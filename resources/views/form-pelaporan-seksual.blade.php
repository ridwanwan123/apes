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
            <form action="" id="msForm" class="row">
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
                            <h1 class="header-title color-palette-1 fw-bold">Identitas Pelapor</h1>
                            <p class="mt-30 mb-40 text-lg color-palette-2">Pelaporan atau korban dapat berkonsultasi kepada para ahli untuk menyembuhkan depresi atau trauma yang mendalamIdentitas yang mengajukan laporan, jika pelapor adalah korban maka pilih 
                                ‘saya korban’ untuk melewati langkah formulir korban  </p>
                        </div>

                        <!-- Input  -->
                        <div class="row g-3 col-lg-12">
                            <div class="col mb-3 ">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                <!-- ERROR <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="col mb-3 ">
                                <label for="nama_korban" class="form-label">Nama Korban</label>
                                <input type="nama_korban" class="form-control" id="nama_korban" name="nama_korban" aria-describedby="nama_korban">
                                <!-- ERROR <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                        </div>

                        <!-- Input  -->
                        <div class="row g-3 col-lg-12">
                            <div class="col mb-3 ">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                                <!-- ERROR <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="col mb-3 ">
                                <label for="no_telepon" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="no_telepon" id="no_telepon" aria-describedby="emailHelp">
                                <!-- ERROR <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                        </div>

                        <!-- Input -->
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
                        </div>

                        <!-- input -->
                        <div class="row g-3 col-lg-12">
                            <div class="col-4 mb-3">
                                <label for="tempat_kejadian" class="form-label">Tempat Kejadian</label>
                                <input type="text" class="form-control" id="" name="tempat_kejadian" aria-describedby="tempat_kejadian">
                                <!-- ERROR <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                        </div>

                        <!-- input -->
                        <div class="row g-3 col-lg-12">
                            <div class="col-4 mb-3">
                                <label for="formFile" class="form-label">Alat Bukti (Foto)</label>
                                <input class="form-control" type="file" name="bukti" id="formFile">
                                <!-- ERROR <div id="formFile" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                        </div>

                        <!-- input -->
                        <div class="row g-3 col-lg-12">
                            <div class="col mb-3">
                                <label for="deskripsi_pelaku" class="form-label">Deskripsi Pelaku</label>
                                <textarea class="form-control" id="deskripsi_pelaku" name="deskripsi_pelaku" rows="6"></textarea>
                                <!-- ERROR <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                        </div>


                        <!-- input -->
                        <div class="row g-3 col-lg-12">
                            <div class="col mb-3">
                                <label for="kronologi_kejadian" class="form-label">Kronologi Kejadian</label>
                                <textarea class="form-control" id="kronologi_kejadian" name="kronologi_kejadian" rows="6"></textarea>
                                <!-- ERROR <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                        </div>

                        <!-- BUTTON  -->
                        <div class="d-md-flex justify-content-md-end mt-5">
                            <!-- <button class="btn btn-primary me-md-2" type="button">Button</button> -->
                            <!-- <button class="btn btn-primary" type="button">Button</button> -->
                            
                            <a href="{{ route('form-pelaporan.success') }}" class="btn btn-primary btn-next p-3"> Submit Laporan</a>

                            <!-- <input type="button" value="Submit Laporan" class="btn btn-primary btn-next p-3"> -->
                        </div>
                        


                    </div>

                </div>
            </form>
        </div>
    </section>

    <!-- SELESAI CONTENT  -->
</body>
</html>