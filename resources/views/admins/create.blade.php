@extends('layouts.app')
@section('title')
  Admin
@endsection
@section('content')
<h3 class="mt-3">create admin</h3>
<hr><div class="card">
  <div class="card-header">
  formulir tambah admin
  </div>
  <div class="card-body">
  <form action="/saveadmin" method="post" enctype="multipart/form-data">

<div class="mb-3 row">
    <label for="nama adminl" class="col-sm-2 col-form-label">nama admin</label>
    <div class="col-sm-10">
      <input type="text" name="nama_admin" class="form-control" id="nama admin">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="no.handphone" class="col-sm-2 col-form-label">no.handphone</label>
    <div class="col-sm-10">
      <input type="text" name="nohp_admin" class="form-control" id="infut no.handphone">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-10">
      <input type="password" name="password_admin" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
    <div class="col-sm-10">
      <textarea name="alamat_admin" class="form-control" id="input alamat" 
      placeholder="masukkan alamat admin"></textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jenis kelamin" class="col-sm-2 col-form-label">jenis kelamin</label>
    <div class="col-sm-10">
    <select name="jk_admin" id="stts" class="form-select">
    <option value="">--pilih jenis kelamin--</option>
    <option value="laki-laki">laki-laki</option>
    <option value="perempuan">perempuan</option>
    </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-10">
      <input type="email" name="email_admin" class="form-control" id="input email">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jabatan" class="col-sm-2 col-form-label">jabatan</label>
    <div class="col-sm-10">
      <input type="text" name="jabatan_admin" class="form-control" id="input jabatan">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="foto" class="col-sm-2 col-form-label">foto</label>
    <div class="col-sm-10">
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
