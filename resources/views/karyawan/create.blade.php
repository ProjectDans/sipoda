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
            <form method="POST" action="{{ url('karyawan') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                       <input type="text" name="nm_karyawan" class="form-control" value="{{old('nm_karyawan')}}" placeholder="nama lengkap">
                       @foreach($errors->get('nm_karyawan') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>NIK</label>
                       <input type="text" name="nik_karyawan" value="{{old('nik_karyawan')}}" class="form-control" placeholder="nomor induk kewarganegaraan">
                       @foreach($errors->get('nik_karyawan') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>No Telepon</label>
                       <input type="text" name="no_tlp_karyawan" value="{{old('no_tlp_karyawan')}}" class="form-control" placeholder="masukkan nomor telepon aktif">
                       @foreach($errors->get('no_tlp_karyawan') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Alamat Email</label>
                       <input type="text" name="email_karyawan" value="{{old('email_karyawan')}}" class="form-control" placeholder="Email">
                       @foreach($errors->get('email_karyawan') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <label>Jabatan Pada Organisasi</label>
                      <select class="form-control" name="jabatan_id" aria-label="Default select example">
                        <option disabled value selected>Pilih Jabatan</option>
                        @foreach ($jabatan as $item)
                            <option value="{{$item->id}}">{{$item->jabatan}}</option>
                        @endforeach
                      </select>
                   </div>
                 </div>
                 </div>
               <button class="btn btn-success" type="submit">Simpan</button>
               <a class="btn btn-warning" href="{{ url('karyawan') }}">Kembali</a>
           </form>
          </div>
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
@endsection