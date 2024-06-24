<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar bg-info navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand h1 mb-0" href="#">salonkecantikan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">product</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="#">contact</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            keranjang
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">cart</a></li>
              <li><a class="dropdown-item" href="#">pesanan</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
@yield('content')
<div class="card border-success mb-3 p-3" style="max-width: 100rem;">
  <div class="card-body text-success">
    <h5 class="card-title">SALON KECANTIKAN</h5>
    <p class="card-text">Salon kecantikan adalah bentuk usaha yang berhubungan dengan perawatan kosmetika, wajah, dan rambut, baik untuk laki-laki maupun perempuan. Variasi lain dari jenis usaha salon kecantikan adalah salon rambut, dan salon tangan dan kuku. </p>
  </div>
  <div class="justify-center">

  <a class="m-3 fs-3 mb-0 text-primary" href="#"><i class="bi bi-facebook"></i></a>
  <a class="m-3 fs-3 mb-0 text-denger" href="#"><i class="bi bi-instagram"></i> </a>
  <a class="m-3 fs-3 mb-0 text-black" href="#"><i class="bi bi-linkedin"></i></a>
  <a class="m-3 fs-3 mb-0 text-denger" href="#"><i class="bi bi-youtube"></i> </a>
  <a class="m-3 fs-3 mb-0 text-succes" href="#"> <i class="bi bi-whatsapp"></i></a>
  
  <div class="card-footer bg-transparent border-success">home  About  Services  contact 
 &copy;2024 ,eni sundari|salon kecantikan
  </div>
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>