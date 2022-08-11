@extends('layouts.dashboard')

@section('content')
<br/>
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show">
  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
    <i class="nc-icon nc-simple-remove"></i>
  </button>
  <span>{{ Session::get('success') }}</span>
</div>
@endif
<br/>
<form method="GET" action="{{ url('jabatan') }}">
  <div class="input-group">
    <input type="text" name="keyword" value="" class="form-control" placeholder="Search...">
    <div class="input-group-append">
      <div class="input-group-text">
        <button class="btn btn-sm btn-grey" type="submit">Search</button>
      </div>
    </div>
  </div>
</form>
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Tabel Data Presensi</h4>
              </div>
              <div class="card-body">
                <div class="table table-hover">
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Presensi Kehadiran Kerja
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Presensi Kehadiran</h5>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('absensi') }}">
          @csrf
          <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                 <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="masukkan nama lengkap">
               </div>
               <div class="col-md-12">
                 <div class="form-check">
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="keterangan" id="keteranganH" value="Hadir">
                    <label for="keteranganH" class="form-check-label">Hadir</label>
                </div> 
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="keterangan" id="keteranganTH" value="Tidak Hadir">
                    <label for="keteranganTH" class="form-check-label">Tidak Hadir</label>
                </div> 
                 </div>
              </div>                    
             </div>                    
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button class="btn btn-success" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
      <br>
      <br>
      <br>
      <br>
      <br>
@endsection