@extends('layouts.main')
@section('title')
home
@endsection
@section('content')
<section class="hero">
<main class="content">
<h1>capek dan pengen rileks? kesalon aja !</h1>
<p>lorem ipsum,dolor sit amet consectetur adipicing elit,Architecto,blanditiis.<p/p>
<a hreff="/product" class="btn">pesan sekarang</a>
</main>
</section>

<section class="about container">
    <h2 class="text-start mt-5 fw-bold">About us</h2>
    <div class="row mt-3">
        <div class="col-md-6">
            <img src="{{ asset('images/imagessalon 1.jfif') }}" alt="" width="100%">
        </div>
        <div class="col-md-6">
            <p class="justype">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptate ipsa, consequuntur vero totam soluta quia sed sunt, eos architecto dolores excepturi, repellat perferendis cumque velit fugiat amet illum pariatur earum eius. Nulla explicabo id quis mollitia. Debitis, iste ab. Enim, odio. Similique praesentium doloremque animi, quae accusamus explicabo aliquam.</p>
        </div>
    </div>
</section>
<section class="Best-Product py-4 mt-5">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold">Best Product</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card">
                <img src="{{ asset('images/download (1)salon.jfif') }} " class="card-img-top" alt="...">
                <div class="card-body" text-center>
                    <h5 class="card-title">scrupies</h5>
                    <p class="card-text">Rp.150.000</p>
                    <a href="#" class="btn btn-primary">pesan sekarang</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                <img src="{{ asset('images/images 5.jfif') }} " class="card-img-top" alt="...">
                <div class="card-body" text-center>
                    <h5 class="card-title">Skintific</h5>
                    <p class="card-text">Rp.300.000</p>
                    <a href="#" class="btn btn-primary">pesan sekarang</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                <img src="{{ asset('images/images8.jfif') }} " class="card-img-top" alt="...">
                <div class="card-body" text-center>
                    <h5 class="card-title">Pond's</h5>
                    <p class="card-text">Rp.100.000</p>
                    <a href="#" class="btn btn-primary">pesan sekarang</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection