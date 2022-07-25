@extends('layouts.base')

@section('title', 'Team')

   
@section('content')

<section class="about about-style3">
    <section class="mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="mb-2 text-center">My Team</h2>
                </div>
                {{-- <div class="col-md-4">
                   <div class="">
                    <img src="{{ asset('admin/assets/img/illustrations/man-with-laptop-light.png') }}" class="img-fluid about-img" alt="blog-img">
                    
                </div> --}}
                </div>
            </div>
            <div class="row justify-content-center">
    
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="admission_insruction">
                            <img src="{{ asset('frontend/assets/image/ando.jpeg') }}" class="img-fluid about-img" alt="#">
                            <p class="text-center mt-3"><span>Ando Kusuma</span>
                                <br>
                                TI 6B - 1907411015
                            </p>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="admission_insruction">
                            <img src="{{ asset('frontend/assets/image/farid.jpeg') }}" class="img-fluid about-img"  alt="#">
                            <p class="text-center mt-3"><span>Farid Wisnu Aji</span>
                                <br>
                                TI 6B - 1907411055
                            </p>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="admission_insruction">
                            <img src="{{ asset('frontend/assets/image/faiz.jpeg') }}" class="img-fluid about-img" alt="#">
                            <p class="text-center mt-3"><span>M Faiz Bahifallah</span>
                                <br>
                                TI 6B - 1907411046
                            </p>   
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="admission_insruction">
                            <img src="{{ asset('frontend/assets/image/RIDWAN.jpg') }}" class="img-fluid about-img" alt="#">
                            <p class="text-center mt-3"><span>Muhamad Ridwan</span>
                                <br>
                                TI 6B - 1907411010
                            </p>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="admission_insruction">
                            <img src="{{ asset('frontend/assets/image/lutfi.jpeg') }}" class="img-fluid about-img" alt="#">
                            <p class="text-center mt-3"><span>Muhammad Lutfi M.</span>
                                <br>
                                TI 6B - 1907411019
                              
                            </p>   
                        </div>
                    </div>
    
              </div>
            <!-- End row -->
        </div>
    </section>
    
</section>



@endsection