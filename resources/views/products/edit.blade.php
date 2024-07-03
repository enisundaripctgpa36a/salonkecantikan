@extends('layouts.app')
@section('title')
  product
@endsection
@section('content')
<h3 class="mt-3">edit product</h3>
<hr><div class="card">
  <div class="card-header">
  formulir tambah product
  </div>
  <div class="card-body">
  <form action="/updateproduct/{{$product->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

<div class="mb-3 row">
    <label for="nama admin" class="col-sm-2 col-form-label">Product</label>
    <div class="col-sm-10">
      <input type="text" value="{{$product->product}}" name="product" class="form-control" id="nama admin">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="no.handphone" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10">
      <input type="text" value="{{$product->price}}" name="price" class="form-control" id="infut no.handphone">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Stok</label>
    <div class="col-sm-10">
      <input type="text" value="{{$product->stock}}" name="stock" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Suplayer</label>
    <div class="col-sm-10">
      <input type="text" value="{{$product->suplayer}}" name="suplayer" class="form-control" id="input email">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jenis kelamin" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
    <select name="status" id="stts" class="form-select">
        @if ($product->status == 'best_product')
            <option value="{{ $product->status }}">{{ $product->status }}</option>
            <option value="nonbest_product">nonbest_product</option>
        @else
            <option value="{{ $product->status }}">{{ $product->status }}</option>
            <option value="best_product">best_product</option>
        @endif
    </select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="foto" class="col-sm-2 col-form-label">foto</label>
    <div class="col-sm-10">
      <input type="hidden" value="{{$product->suplayer}}" name="foto_lama">
      <input type="file" name="product_image" class="form-control" id="foto"accept="images/*">
    </div>
  </div>

  <div class="mb-3">
  <button class="btn btn-primary" type="submit">save product</button>
  </div>
  </form>
  </div>
</div>
@endsection
