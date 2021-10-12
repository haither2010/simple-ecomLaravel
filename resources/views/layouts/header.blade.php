<?php

  use App\Http\Controllers\ProductController;
  
  $totalCartItem = null;
  if(Session::has('user'))
  {
    $totalCartItem  = ProductController::cartCount();
  }
?>

<nav class="p-2 navbar navbar-expand-lg navbar-dark bg-dark fw-normal fs-6">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HAI-SALE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="mb-2 navbar-nav me-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('product.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li>&nbsp;&nbsp;
        <form class="ml-2 d-flex" action="{{ route('product.search') }}" method="POST">
          @csrf
          <input class="form-control me-2" type="search" name="searchInp" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit" name="searchBtn">Search</button>
        </form>
      </ul>
      <ul class="me-3 navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Cart ({{ $totalCartItem }})</a></li>
        <li class="text-white nav-item dropdown bg-dark">
            @if (session()->has('user'))
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ session()->get('user')['name'] }}
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">hello</a></li>
                <li><a class="dropdown-item" href="#">Babies</a></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            @else
            <a class="nav-link" href="/login" id="" role="" data-bs-toggle=""> Login </a>
            @endif  
        </li>
      </ul>
    </div>
  </div>
</nav>


{{-- Crousel slide bar --}}
@php
  $header = 'null';
@endphp
<div class="carousel-cover 
  @php
    if($header == 'none'){
      echo 'd-none';
    }else {
      echo 'd-block';
    }
  @endphp">
  <div id="myHeader-carousel" class="carousel slide carousel-customWrap" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myHeader-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myHeader-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myHeader-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item header-carouselItem active">
        <img src="images/header1.png" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item header-carouselItem">
        <img src="images/header2.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item header-carouselItem">
        <img src="images/header3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myHeader-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myHeader-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>