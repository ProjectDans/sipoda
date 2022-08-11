@extends('layouts.dashboard')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Anda Berhasil Login!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Akun Yang Terdaftar</p>
                      <p class="card-title">{{$dtProfile}} Akun<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Jumlah iuran yang terkumpul</p>
                      <p class="card-title">$ 1,345<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-box text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Jumlah Pedagang Yang Terdaftar</p>
                      <p class="card-title">{{$datas}} Orang<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-map-big text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Wilayah Yang Terdaftar</p>
                      <p class="card-title">{{$dtWilayah}} Tempat<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              @if (auth()->user()->level == "admin")
              <h4 class="card-title">List Data Pedagang Yang Terdaftar</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th class="text-center">Nama Pemilik Dagangan</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Agama</th>
                    <th class="text-center">No Telepon</th>
                    <th class="text-center">NIK Pedagang</th>
                    <th class="text-center">Alamat Pedagang</th>
                </thead>
                <tbody>
                  @foreach ($dtPedagang as $item)
                  <tr class="text-center">
                    <td>{{$item->nm_pedagang}}</td>
                    <td>{{$item->gender_pedagang}}</td>
                    <td>{{$item->agama_pedagang}}</td>
                    <td>{{$item->no_tlp_pedagang}}</td>
                    <td>{{$item->nik_pedagang}}</td>
                    <td>{{$item->alamat_pedagang}}</td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              @if (auth()->user()->level == "admin")
              <h4 class="card-title">Rekap Data Absensi</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th class="text-center">No</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Keterangan</th>
                </thead>
                <tbody>  
                  @php($no = 1)                  
                  @foreach ($dtAbsensi as $item)  
                    <tr class="text-center">
                      <td>{{$no}}</td>
                      <td>{{$item->name}}</td>
                      <td><button class="btn btn-sm btn-outline-info" disabled>{{$item->keterangan}}</button></td>                          
                    </tr>    
                    @php($no++)
                  @endforeach                   
                </tbody>
                </table>
                @endif
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
@endsection
