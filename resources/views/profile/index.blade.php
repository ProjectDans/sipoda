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
<form method="GET" action="{{ url('profile') }}">
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
                <h4 class="card-title">Data Akun Yang Tersimpan</h4>
              </div>
              <div class="card-body">
                <div class="table table-hover">
                  <table class="table">
                    <thead class=" text-primary">
                        <th class="text-center">Nama Lengkap</th>
                        <th class="text-center">Alamat E-mail</th>
                        <th class="text-center">Status Akun</th>
                        <th class="text-center" colspan="2">Action</th></th>
                    </thead>
                    <tbody>
                        @foreach ($dtUser as $item)                            
                        <tr class="text-center">
                          <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td><button class="btn btn-sm btn-outline-success" disabled>{{$item->level}}</button></td>
                          <td><a href="{{ url('profile/'.$item->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a></td>
                          <td>
                            <form action="{{ url('profile/'.$item->id) }}" method="POST">
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach                          
                    </tbody>
                  </table>
                  {{-- {{ $dtPegawai->links('pagination::bootstrap-4') }} --}}
                </div>
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