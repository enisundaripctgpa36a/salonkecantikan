@extends('layouts.app')
@section('title')
  Admin
@endsection
@section('content')
    <h1>Admin</h1>
    <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="#">Dasboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Admin</li>
     </ol>
  </nav>
  <hr>
  <a class="btn btn-outline-info" href="/createadmin" role="button">tambahkan admin</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Foto</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Hp</th>
      <th scope="col">Detail</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($admin as $item)
    <tr>
      <th scope="row">{{ $loop->iteration}}</th>
      <td><img src="{{ asset('storage/uploads/' . $item->foto_admin) }}" alt="" width="80"></td>
      <td>{{ $item->nama_admin}}</td>
      <td>{{ $item->jabatan_admin}}</td>
      <td>{{ $item->nohp_admin}}</td>
      <td>
        <a href="/detailsadmin/{{$item->id}}" class="btn btn-primary">Details</a>
      </td>
      <td>
        <a href="/editadmin/{{$item->id}}" class="btn btn-primary">Edit</a>
      </td>
      <td>
        <a href="/deleteadmin/{{$item->id}}" class="btn btn-primary">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    @endsection