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
            <form method="POST" action="{{ url('pedagang/'.$model->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                       <input type="text" name="nm_pedagang" value="{{$model->nm_pedagang}}" class="form-control" placeholder="nama lengkap">
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="gender_pedagang" aria-label="Default select example">
                          <option selected>Pilih Gender</option>
                          <option value="{{$model->gender_pedagang}}" {{$model->gender_pedagang}}>Laki-laki</option>
                          <option value="{{$model->gender_pedagang}}" {{$model->gender_pedagang}}>Perempuan</option> 
                        </select>                       
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Agama</label>
                       <input type="text" name="agama_pedagang" value="{{$model->agama_pedagang}}" class="form-control" placeholder="agama / kepercayaan">
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>No. Telepon</label>
                       <input type="text" name="no_tlp_pedagang" value="{{$model->no_tlp_pedagang}}" class="form-control" placeholder="no telepon">
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>NIK</label>
                       <input type="text" name="nik_pedagang" value="{{$model->nik_pedagang}}" class="form-control" placeholder="nomor induk kewarganegaraan">
                     </div>
                   </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Status Perkawinan</label>
                       <input type="text" name="status_nikah_pedagang" value="{{$model->status_nikah_pedagang}}" class="form-control" placeholder="menikah/tidak menikah">
                     </div>
                   </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat Tempat Tinggal</label>
                       <input type="text" name="alamat_pedagang" value="{{$model->alamat_pedagang}}" class="form-control" placeholder="alamat">
                     </div>
                   </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Kegiatan Usaha Yang Diajukan</label>
                       <input type="text" name="nm_usaha" value="{{$model->nm_usaha}}" class="form-control" placeholder="kegiatan usaha">
                     </div>
                   </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Perlengkapan Kegiatan Usaha</label>
                       <input type="text" name="alat_usaha" value="{{$model->alat_usaha}}" class="form-control" placeholder="tuliskan perlengkapan yang akan digunakan untuk kegiatan usaha">
                     </div>
                   </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Penempatan Wilayah Kegiatan Usaha</label>
                       <input type="text" name="wilayah_usaha" value="{{$model->wilayah_usaha}}" class="form-control" placeholder="tuliskan tempat atau wilayah untuk kegiatan usaha">
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
@endsection