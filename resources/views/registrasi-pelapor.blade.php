<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>APES | Register</title>

    <meta name="description" content="" />
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/avatars/A1.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/pages/page-auth.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="{{ route('homepage') }}" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img src="{{ asset('admin/assets/img/avatars/A1.png') }}" alt="" width="50px" srcset="">
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">apes.</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2 mt-4">Adventure starts here 🚀</h4>
              <!-- <p class="mb-4">Make your app management easy and fun!</p> -->
              <br>
              <form  class="mb-3" action="{{ route('registrasi.store') }}" method="POST">
                @csrf
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3">
                        <label for="no_ktp" class="form-label">NOMOR KTP / NOMOR IDENTITAS</label>
                        <input type="number" class="form-control" id="no_ktp" value="{{ old('no_ktp') }}" name="no_ktp" aria-describedby="no_ktp">
                        @error('no_ktp')
                          <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="nama_pelapor" class="form-label">Nama Lengkap</label>
                        <input type="nama_pelapor" class="form-control" id="nama_pelapor" value="{{ old('nama_pelapor') }}" name="nama_pelapor" aria-describedby="nama_pelapor">
                        @error('nama_pelapor')
                          <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
               <!-- Input  -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3 ">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" aria-describedby="email">
                        @error('email')
                          <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge">
                          <input  type="password"  id="password"  class="form-control"  name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                        @error('password')
                        <div style="color: red">{{ $message }}</div>
                        @enderror
                      </div>
                </div>
                <!-- Input  -->
                <div class="row g-3 col-lg-12">
                    <div class="col mb-3 ">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                          <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="no_telepon" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="" name="no_telepon" value="{{ old('no_telepon') }}" aria-describedby="no_telepon">
                        @error('no_telepon')
                          <div style="color: red">{{ $message }}</div>
                        @enderror
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
                        @error('jenis_kelamin')
                          <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row col-lg-12">
                    <div class="col mb-3 ">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" cols="6" rows="6"></textarea>
                        @error('alamat')
                          <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                

                <button type="submit" class="mt-2 btn btn-primary d-grid w-100">
                  <span class="font-semibold text-white text-base">Register</span>
                </button>
              
              </form>

              <p class="text-center">
                <span>Sudah Punya Akun?</span>
                <a href="{{ route('admin.login') }}">
                  <span>Login</span>
                </a>
              </p>
              
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
