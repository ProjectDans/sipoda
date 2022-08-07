@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Form Tambah Data Wilayah</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ url('wilayah') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Tempat</label>
                       <input type="text" name="wilayah" value="{{old('wilayah')}}" class="form-control" placeholder="nama tempat">
                       @foreach($errors->get('wilayah') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>                    
                 </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Kelurahan</label>
                       <input type="text" name="nm_kelurahan" value="{{old('nm_kelurahan')}}" class="form-control" placeholder="nama kelurahan">
                       @foreach($errors->get('nm_kelurahan') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>                    
                 </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Kecamatan</label>
                       <input type="text" name="nm_kecamatan" value="{{old('nm_kecamatan')}}" class="form-control" placeholder="nama kecamatan">
                       @foreach($errors->get('nm_kecamatan') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>                    
                 </div>
               <button class="btn btn-success" type="submit">Simpan</button>
               <a class="btn btn-warning" href="{{ url('wilayah') }}">Kembali</a>
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
@endsection