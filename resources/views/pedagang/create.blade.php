@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Form Tambah Data Pedagang</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ url('pedagang') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                       <input type="text" name="nm_pedagang" value="{{old('nm_pedagang')}}" class="form-control" placeholder="nama lengkap">
                       @foreach($errors->get('nm_pedagang') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="gender_pedagang" aria-label="Default select example">
                          <option disabled value selected>Pilih Gender</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>                       
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control" name="agama_pedagang" aria-label="Default select example">
                          <option disabled value selected>Pilih Agama</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Buddha">Buddha</option>
                          <option value="Hindu">Hindu</option>
                        </select> 
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>No. Telepon</label>
                       <input type="text" name="no_tlp_pedagang" value="{{old('no_tlp_pedagang')}}" class="form-control" placeholder="no telepon">
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>NIK</label>
                       <input type="text" name="nik_pedagang" value="{{old('nik_pedagang')}}" class="form-control" placeholder="nomor induk kewarganegaraan">
                       @foreach($errors->get('nik_pedagang') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Status Perkawinan</label>
                        <select class="form-control" name="status_nikah_pedagang" aria-label="Default select example">
                          <option disabled value selected>Pilih Status</option>
                          <option value="Menikah">Menikah</option>
                          <option value="Tidak Menikah">Tidak Menikah</option>
                        </select>
                       {{-- <input type="text" name="status_nikah_pedagang" value="{{old('status_nikah_pedagang')}}" class="form-control" placeholder="menikah/tidak menikah"> --}}
                     </div>
                   </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat Tempat Tinggal</label>
                       <input type="text" name="alamat_pedagang" value="{{old('alamat_pedagang')}}" class="form-control" placeholder="alamat">
                       @foreach($errors->get('alamat_pedagang') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Kegiatan Usaha Yang Diajukan</label>
                       <input type="text" name="nm_usaha" value="{{old('nm_usaha')}}" class="form-control" placeholder="kegiatan usaha">
                     </div>
                   </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Perlengkapan Kegiatan Usaha</label>
                       <input type="text" name="alat_usaha" value="{{old('alat_usaha')}}" class="form-control" placeholder="tuliskan perlengkapan yang akan digunakan untuk kegiatan usaha">
                     </div>
                   </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Penempatan Wilayah Kegiatan Usaha</label>
                        <select class="form-control" name="wilayah_id" aria-label="Default select example">
                          <option disabled value selected>Pilih Wilayah</option>
                          @foreach ($wilayah as $item)
                              <option value="{{$item->id}}">{{$item->wilayah}}</option>
                          @endforeach
                        </select>
                       {{-- <input type="text" name="wilayah_usaha" value="{{old('wilayah_usaha')}}" class="form-control" placeholder="tuliskan tempat atau wilayah untuk kegiatan usaha"> --}}
                     </div>
                   </div>
                 </div>
               <button class="btn btn-success" type="submit">Simpan</button>
               <a class="btn btn-warning" href="{{ url('pedagang') }}">Kembali</a>
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
@endsection