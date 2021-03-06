@extends('layouts.base')

@section('title', 'Akun Setting')

   
@section('content')

<div class="container">
  <div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account</span> </h4>

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded"
                height="100" width="100"  id="uploadedAvatar" />
              <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-2" tabindex="0">
                  <span class="d-none d-sm-block">Upload new photo</span>
                  <i class="bx bx-upload d-block d-sm-none"></i>
                  <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg"
                  />
                </label>
                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
              </div>
            </div>
          </div>
          <hr class="my-0" />
          <div class="card-body">
            <form id="formAccountSettings" method="POST" onsubmit="return false">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="nama" class="form-label">Nomor KTP/ Identitas Diri</label>
                  <input class="form-control" type="text"  id="nama" value="#"  name="nama"/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input class="form-control" type="text"  id="nama"  name="nama"/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">E-mail </label>
                  <input class="form-control" type="email" name="email" id="email" />
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Phone Number</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text">IND</span>
                    <input class="form-control" type="number"  id="nama"  name="nama"/>
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="state" class="form-label">State</label>
                  <input class="form-control" type="text" id="state" name="state" placeholder="California" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="zipCode" class="form-label">Zip Code</label>
                  <input
                    type="text"
                    class="form-control"
                    id="zipCode"
                    name="zipCode"
                    placeholder="231465"
                    maxlength="6"
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="country">Country</label>
                  <select id="country" class="select2 form-select">
                    <option value="">Select</option>
                    <option value="Australia">Australia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                    <option value="Korea">Korea, Republic of</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Russia">Russian Federation</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="language" class="form-label">Language</label>
                  <select id="language" class="select2 form-select">
                    <option value="">Select Language</option>
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="pt">Portuguese</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="timeZones" class="form-label">Timezone</label>
                  <select id="timeZones" class="select2 form-select">
                    <option value="">Select Timezone</option>
                    <option value="-12">(GMT-12:00) International Date Line West</option>
                    <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                    <option value="-10">(GMT-10:00) Hawaii</option>
                    <option value="-9">(GMT-09:00) Alaska</option>
                    <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                    <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                    <option value="-7">(GMT-07:00) Arizona</option>
                    <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                    <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                    <option value="-6">(GMT-06:00) Central America</option>
                    <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                    <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                    <option value="-6">(GMT-06:00) Saskatchewan</option>
                    <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                    <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                    <option value="-5">(GMT-05:00) Indiana (East)</option>
                    <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                    <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="currency" class="form-label">Currency</label>
                  <select id="currency" class="select2 form-select">
                    <option value="">Select Currency</option>
                    <option value="usd">USD</option>
                    <option value="euro">Euro</option>
                    <option value="pound">Pound</option>
                    <option value="bitcoin">Bitcoin</option>
                  </select>
                </div>
              </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
              </div>
            </form>
          </div>
          <!-- /Account -->
        </div>
        <div class="card">
          <h5 class="card-header">Status Laporan</h5>
          <div class="card-body">
            <div class="mb-3 col-12 mb-0">
              <div class="alert alert-warning">
                <h6 class="alert-heading fw-bold mb-1">Status Laporan</h6>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam vero natus doloremque?</p>
              </div>
            </div>
            <form id="formAccountDeactivation" onsubmit="return false">
              <div class="form-check mb-3">
                <div class="col mb-3 ">
                  <label for="status" class="form-label fs-5 ">STATUS LAPORAN : </label>
                  <span class="badge fs-5 bg-warning me-1"> MENUNGGU </span>
                  <div class="col">
                      
                      {{-- <span class="badge bg-secondary">Secondary</span> --}}
                      {{-- @if ($PelaporanSeksual->status == 'MENUNGGU')
                          <span class="badge fs-3 bg-label-warning me-1"> {{ $PelaporanSeksual->status }}</span>
                      @elseif ($PelaporanSeksual->status == 'LAPORAN DITERIMA')
                          <span class="badge fs-3 bg-label-primary me-1"> {{ $PelaporanSeksual->status }}</span>
                      @elseif ($PelaporanSeksual->status == 'LAPORAN DITOLAK')
                          <span class="badge fs-3 bg-label-danger me-1"> {{ $PelaporanSeksual->status }}</span>
                      @endif --}}
                  </div>
                </div>

                <button type="submit" class="btn btn-primary deactivate-account justify-content-end">Check Laporan</button>
              </div>
         
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection