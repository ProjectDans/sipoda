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
<a class="btn btn-info" href="{{ url('karyawan/create') }}">Tambah Data Karyawan</a>
<br/>
<form method="GET" action="{{ url('karyawan') }}">
  <div class="input-group">
    <input type="text" name="keyword" value="{{ $keyword }}" class="form-control" placeholder="Search...">
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
                <h4 class="card-title"> Tabel Data Pedagang IPKL</h4><br>
                <p>Halaman ini melampirkan seluruh data karyawan yang bekerja pada organisasi IPKL</p>
              </div>
              <div class="card-body">
                <div class="table table-hover">
                  <table class="table">
                    <thead class=" text-primary">
                        <th class="text-center">Nama Lengkap</th>
                        <th class="text-center">NIK</th>
                        <th class="text-center">No Telepon</th>
                        <th class="text-center">Alamat Email</th>
                        <th class="text-center">Jabatan pada organisasi</th>
                        <th class="text-center" colspan="2">Action</th></th>
                    </thead>
                    <tbody>
                      @foreach($datas as $key=>$value)
                      <tr class="text-center">
                        <td>{{ $value->nm_karyawan }}</td>
                        <td>{{ $value->nik_karyawan }}</td>
                        <td>{{ $value->no_tlp_karyawan }}</td>
                        <td>{{ $value->email_karyawan }}</td>
                        <td>{{ $value->jabatan->jabatan }}</td>
                        <td><a href="{{ url('karyawan/'.$value->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a></td>
                        <td>
                          <form action="{{ url('karyawan/'.$value->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $datas->links('pagination::bootstrap-4') }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection