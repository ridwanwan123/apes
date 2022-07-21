<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white pt-lg-40 pb-lg-40 pt-30 pb-50">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/homepage') }}">
                <img src="{{ asset('frontend/assets/image/logo.png') }}" width="150px" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-lg gap-lg-0 gap-2">
                    <li class="nav-item my-auto">
                        <a class="nav-link {{ Request::is('homepage') ? 'active' : '' }}" aria-current="page" href="{{ url('/homepage') }}">Home</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link {{ Request::is('statistik') ? 'active' : '' }}" href="{{ url('/statistik') }}">Statistik</a>
                    </li>
                    {{-- <li class="nav-item my-auto">
                        <a class="nav-link" href="#">Konsultasi</a>
                    </li> --}}
                    <li class="nav-item my-auto">
                        <a class="nav-link {{ Request::is('berita-pelecehan-seksual') ? 'active' : '' }}" href="{{ url('berita-pelecehan-seksual') }}">Berita</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="btn btn-lapor d-flex justify-content-center ms-lg-2" href="{{ route('form-pelaporan') }}" role="button">Lapor</a>
                    </li>  

                    {{-- @auth
                        <li class="nav-item my-auto">
                            <a class="btn btn-lapor d-flex justify-content-center ms-lg-2" href="{{ route('akun-setting') }}" role="button">My Profile</a>
                        </li>
                    @else
                        <li class="nav-item my-auto">
                            <a class="btn btn-lapor d-flex justify-content-center ms-lg-2" href="{{ route('login') }}" role="button">Login</a>
                        </li>  
                    @endauth    --}}

                </ul>
            </div>
        </div>
    </nav>
</section>
