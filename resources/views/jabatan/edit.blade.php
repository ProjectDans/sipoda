@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Form Edit Data Jabatan</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ url('jabatan/'.$model->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Jabatan Organisasi</label>
                       <input type="text" name="jabatan" value="{{$model->jabatan}}" class="form-control" placeholder="masukkan nama jabatan">
                       @foreach($errors->get('jabatan') as $msg)
                       <p class="text-danger">{{$msg}}</p>
                       @endforeach
                     </div>
                   </div>                    
                 </div>
               <button class="btn btn-success" type="submit">Update</button>
               <a class="btn btn-warning" href="{{ url('jabatan') }}">Kembali</a>
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
  <br>
  <br>
@endsection