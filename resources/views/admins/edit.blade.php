@extends('layouts.app')
@section('title')
  Admin
@endsection
@section('content')
<h3 class="mt-3">Edit admin</h3>
<hr><div class="card">
  <div class="card-header">
  formulir Edit admin
  </div>
  <div class="card-body">
  <form action="/updateadmin/{{$admin->id}}" method="post" enctype="multipart/form-data">
  @method('PUT')
    @csrf

<div class="mb-3 row">
    <label for="nama adminl" class="col-sm-2 col-form-label">nama admin</label>
    <div class="col-sm-10">
      <input type="text" value="{{ $admin->nama_admin }}" name="nama_admin" class="form-control" id="nama admin">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="no.handphone" class="col-sm-2 col-form-label">no.handphone</label>
    <div class="col-sm-10">
      <input type="text" value="{{ $admin->nohp_admin }}" name="nohp_admin" class="form-control" id="infut no.handphone">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
    <div class="col-sm-10">
      <textarea name="alamat_admin" class="form-control" id="input alamat" 
      placeholder="masukkan alamat admin">{{ $admin->alamat_admin }}</textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jenis kelamin" class="col-sm-2 col-form-label">jenis kelamin</label>
    <div class="col-sm-10">
    <select name="jk_admin" id="stts" class="form-select">
        @if ($admin->jk_admin == 'laki-laki')
            <option value="{{ $admin->jk_admin }}">{{ $admin->jk_admin }}</option>
            <option value="perempuan">perempuan</option>
        @else
            <option value="{{ $admin->jk_admin }}">{{ $admin->jk_admin }}</option>
            <option value="laki-laki">laki-laki</option>
        @endif
    </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-10">
      <input type="email" value="{{ $admin->email_admin }}" name="email_admin" class="form-control" id="input email">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jabatan" class="col-sm-2 col-form-label">jabatan</label>
    <div class="col-sm-10">
      <input type="text" value="{{ $admin->jabatan_admin }}" name="jabatan_admin" class="form-control" id="input jabatan">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="foto" class="col-sm-2 col-form-label">foto</label>
    <div class="col-sm-10">
      <input type="hidden" value="{{ $admin->foto_admin }}" name="foto_lama" class="form-control" id="foto"accept="images/*">
      <input type="file" name="foto_admin" class="form-control" id="foto"accept="images/*">
    </div>
  </div>

  <div class="mb-3">
  <button class="btn btn-primary" type="submit">save admin</button>
  </div>
  </form>
  </div>
</div>
@endsection
