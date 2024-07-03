@extends('layouts.app')
@section('title')
    Product
@endsection
@section('content')
    <h1>Product</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dasboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </ol>
    </nav>
    <hr>
    <a class="btn btn-outline-info" href="/createproduct" role="button">tambahkan product</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Product</th>
                <th scope="col">Harga</th>
                <th scope="col">Stock</th>
                <th scope="col">Suplayer</th>
                <th scope="col">Status</th>
                <th scope="col">Detail</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/uploads/' . $item->product_image) }}" alt="" width="80">
                    </td>
                    <td>{{ $item->product }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>{{ $item->suplayer }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="/detailsproduct/{{ $item->id }}" class="btn btn-primary">Details</a>
                    </td>
                    <td>
                        <a href="/editproduct/{{ $item->id }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="/deleteproduct/{{ $item->id }}" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
