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
            <form method="POST" action="{{ url('profile/'.$dtUser->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                       <input type="text" name="name" value="{{$dtUser->name}}" class="form-control" placeholder="masukkan nama lengkap">
                     </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Alamat E-mail</label>
                       <input type="text" name="email" value="{{$dtUser->email}}" class="form-control" placeholder="masukkan email address">
                     </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select class="form-control" name="level" aria-label="Default select example">
                            <option selected>Pilih Status Akun</option>
                            <option value="admin" {{$dtUser->level}}>Admin</option>
                            <option value="user" {{$dtUser->level}}>User</option> 
                          </select>                       
                       </div>
                     </div>
                </div>
               <button class="btn btn-success" type="submit">Update Data</button>
               <a class="btn btn-warning" href="{{ url('profile') }}">Kembali</a>
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
  <br>
  <br>
  <br>
@endsection