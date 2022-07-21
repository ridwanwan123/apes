<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- <title>{{ $title }}</title> --}}
  </head>
  <body>
    <div class="container-fluid">
        <div class="container-xxl mt-5">
            {{-- <div class="row">
                <div class="col">
                    <img src="{{ asset('admin/assets/img/avatars/A1.png') }}" alt="Logo-APES" class="" srcset=""> 
                    <h3>Result Laporan Pelecehan Seksual</h3>
                </div>
            </div> --}}
            <h3 style=”text-align:justify;” class="text-center">
                <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/294896906_1845655905643232_614870098077471193_n.jpg?stp=cp0_dst-jpg&_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEOWwFwDElGi1nb9sYK_wgnNXXV9uXoSyA1ddX25ehLIKBSb_pMQPeCXm-cpv56uty0JpyQXwmoYQ97LbnPocem&_nc_ohc=xnyL131WUrwAX8iJzL_&_nc_ht=scontent-sin6-2.xx&oh=00_AT-TnUeC2659hyY0TvHhO42kYOhPA1oWMRnqUGWGZR17wQ&oe=62DE78C6" alt="Logo-APES" class="me-4" width="60px" srcset="" />  
                 Result Laporan Pelecehan Seksual
            </h3><br>

                <table class="table table-striped">
                    <tr>
                        <td width="30%" class="fs-4 ">STATUS LAPORAN</td>
                        <td>
                            <span class="badge bg-primary p-1">{{ $PelaporanSeksual->status }}</span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="fs-4 ">NO IDENTITAS</td>
                        <td>
                            <label for="" class="col-form-label"> {{ $PelaporanSeksual->no_ktp }} </label>
                        </td>
                    </tr>
                    
                    <tr class="fs-4 ">
                        <td>NAMA PELAPOR</td>
                        <td>
                            <label for="" class="col-form-label"> {{ $PelaporanSeksual->nama_pelapor }} </label>
                        </td>
                    </tr>
                    
                    <tr class="fs-4 ">
                        <td>EMAIL PELAPOR</td>
                        <td>
                            <label for="" class="col-form-label"> {{ $PelaporanSeksual->email }} </label>
                        </td>
                    </tr>
                    
                    <tr class="fs-4 ">
                        <td>TANGGAL LAHIR</td>
                        <td>
                            <label for="" class="col-form-label"> {{ $PelaporanSeksual->tanggal_lahir }} </label>
                        </td>
                    </tr>
                    
                    <tr class="fs-4 ">
                        <td>ALAMAT</td>
                        <td>
                            <label for="" class="col-form-label"> {{ $PelaporanSeksual->alamat }} </label>
                        </td>
                    </tr>
                    
                    <tr class="fs-4 ">
                        <td>JENIS KELAMIN</td>
                        <td>
                            <label for="" class="col-form-label"> {{ $PelaporanSeksual->jenis_kelamin }} </label>
                        </td>
                    </tr>
                    
                    <tr class="fs-4 ">
                        <td>NOMOR TELEPON</td>
                        <td>
                            <label for="" class="col-form-label"> {{ $PelaporanSeksual->no_telepon }} </label>
                        </td>
                    </tr>
                    
                    <tr class="fs-4 ">
                        <td>LOKASI KEJADIAN</td>
                        <td>
                            <label for="" class="col-form-label"> {{ $PelaporanSeksual->lokasi_kejadian }} </label>
                        </td>
                    </tr>
                    
                    <tr class="fs-4 ">
                        <td>BUKTI</td>
                        <td>
                            <img src="{{ storage_path('app/public/alat-bukti/'.$PelaporanSeksual->bukti) }}" alt="alat-bukti" width="200px" srcset="">
                        </td>
                    </tr>
                    
                    <tr class="fs-4 ">
                        <td>DESKRIPSI PELAKU</td>
                        <td>
                            <label for="" class="col-form-label"> {{ $PelaporanSeksual->dekripsi_pelaku }} </label>
                        </td>
                    </tr>
                    
                    <tr class="fs-4 ">
                        <td>KRONOLOGI KEJADIAN</td>
                        <td>
                            <label for="" class="col-form-label"> {{ $PelaporanSeksual->kronologi_kejadian }} </label>
                        </td>
                    </tr>
                </table>



            

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>