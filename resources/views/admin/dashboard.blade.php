@extends('admin.layouts.base')

@section('title', 'Dashboard')

   
@section('content')

<h4 class="fw-bold py-3 mb-4"> Dashboard </h4>
<div class="row">
  <div class="mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Selamat datang di Apes,  <i> {{ auth()->user()->name }}! 🎉</i> </h5>
            <p class="mb-4">
              Sebuah Website <span class="fw-bold">Pelaporan</span> untuk membantu para korban mendapatkan keadilan.
            </p>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img
              src="{{ asset('admin/assets/img/illustrations/Site Stats-amico.svg') }}"
              height="140"
              alt="View Badge User"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="order-1">
  <div class="row">
    <div class="col-lg-3 col-md-3 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <h5 class="card-title text-nowrap mb-5">Pelaporan <br> pelecehan seksual</h5>
              <h1 class="card-title text-primary mt-2"> ? </h1>
            </div>
            <div class="dropdown">
              <img src="{{ asset('admin/assets/img/illustrations/Data report-amico.svg') }}" width="100px" alt="Credit Card" class="rounded mt-5" />
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="col-lg-3 col-md-3 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="flex-shrink-0">
                <h3 class="card-title text-nowrap mb-5">Berita</h3>
                <h1 class="card-title text-primary mt-2"> ? </h1>
              </div>
              <div class="dropdown">
                <img src="{{ asset('admin/assets/img/illustrations/News-pana.svg') }}" width="100px" alt="Credit Card" class="rounded mt-5" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection