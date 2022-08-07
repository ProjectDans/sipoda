@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Form Tambah Data Karyawan</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ url('karyawan/'.$model->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                       <input type="text" name="nm_karyawan" value="{{$model->nm_karyawan}}" class="form-control" placeholder="nama lengkap">
                       @foreach($errors->get('nm_karyawan') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>NIK</label>
                       <input type="text" name="nik_karyawan" value="{{$model->nik_karyawan}}" class="form-control" placeholder="nomor induk kewarganegaraan">
                       @foreach($errors->get('nik_karyawan') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>No Telepon</label>
                       <input type="text" name="no_tlp_karyawan" value="{{$model->no_tlp_karyawan}}" class="form-control" placeholder="masukkan nomor telepon aktif">
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Alamat Email</label>
                       <input type="text" name="email_karyawan" value="{{$model->email_karyawan}}" class="form-control" placeholder="Email">
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Jabatan pada organisasi</label>
                       <input type="text" name="jabatan_karyawan" value="{{$model->jabatan_karyawan}}" class="form-control" placeholder="masukkan jabatan atau posisi pada organisasi">
                     </div>
                   </div>
                 </div>
               <button class="btn btn-success" type="submit">Update Data</button>
               <a class="btn btn-warning" href="{{ url('karyawan') }}">Kembali</a>
           </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection