@extends('layouts.base')

@section('title', 'Product')


@section('content')
{{-- carousel trending products --}}
<div class="container">
  <h3 class="my-5 text-secondary">Trending Products</h3>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      {{-- Retriew from database product images --}}
      <div class="carousel-item active">
        <div class="row">
          @foreach ($productsLimit as $items)
            <div class="col-md-3 trending-img">
              <img src="{{ $items->gallery }}" class="d-block w-100" alt="...">
              <p class="my-2 text-center">{{ $items->name }}</p>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Manually created product images --}}
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-3 trending-img">
            <img src="img-slides/laptop2.png" class="d-block w-100" alt="...">
            <p class="my-2 text-center">HP Laptop</p>
          </div>
          <div class="col-md-3 trending-img">
            <img src="img-slides/speaker1.png" class="d-block w-100" alt="...">
            <p class="my-2 text-center">Sony Speakers</p>
          </div>
          <div class="col-md-3 trending-img">
            <img src="img-slides/tv1.png" class="d-block w-100" alt="...">
            <p class="my-2 text-center">Samsung Smart Tv</p>
          </div>
          <div class="col-md-3 trending-img">
            <img src="img-slides/speaker3.png" class="d-block w-100" alt="...">
            <p class="my-2 text-center">LG Speakers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
{{-- Catergory mobiles container --}}
<div class="container">
  <h3 class="p-3 my-3 text-center bg-light text-secondary">Category: Mobiles</h3>
  <div class="row">
    @foreach ($products as $categoryItems)
      @if ($categoryItems->category == 'mobiles')  
      <div class="col-md-3">
        <div class="card">
          <img src="{{ $categoryItems->gallery }}" class="card-img-top img-contMain" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $categoryItems->name }}</h5>
            <p class="card-text">{{ $categoryItems->description }}</p>
            <h5 class="my-3 text-secondary">Price: <span class="badge bg-secondary">Rs. {{ $categoryItems->price }}</span></h5>
            <div class="gap-2 d-grid d-flex justify-content-between">
              <a href="/details/{{ $categoryItems->id }}" class="btn btn-outline-secondary">Details</a>
              <a href="#" class="btn btn-outline-secondary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      @endif
    @endforeach
  </div>
</div>
{{-- Category Electronics Container --}}
<div class="container">
  <h3 class="p-3 my-3 text-center bg-light text-secondary">Category: Electronics</h3>
  <div class="row">
    @foreach ($products as $categoryItems)
      @if ($categoryItems->category == 'electronics')  
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="card">
          <img src="{{ $categoryItems->gallery }}" class="card-img-top img-contMain" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $categoryItems->name }}</h5>
            <p class="card-text">{{ $categoryItems->description }}</p>
            <h5 class="my-3 text-secondary">Price: <span class="badge bg-secondary">Rs. {{ $categoryItems->price }}</span></h5>
            <div class="gap-2 d-grid d-flex justify-content-between align-self-end">
              <a href="/details/{{ $categoryItems->id }}" class="btn btn-outline-secondary">Details</a>
              <a href="#" class="btn btn-outline-secondary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      @endif
    @endforeach
  </div>
</div>

{{-- end carousel trending products --}}
{{-- <div class="my-4 row">
  <div class="col-md-12">
    <h2 class="my-3 text-secondary">Trending Products</h2>

    <div class="d-md-flex justify-content-md-between w-100">
      @foreach ($productsLimit as $items)  
        <div class="card trend-card">
          <img src="{{ $items->gallery }}" class="card-img-top card-image" alt="trending products">
          <div class="card-body">
              <div class="gap-2 d-grid d-flex justify-content-between">
                <button type="button" class="btn btn-outline-secondary btn-sm">View Product</button>
                <button type="button" class="btn btn-outline-secondary btn-sm">Add to cart</button>
              </div>
          </div>
        </div>
      @endforeach 
  </div>
</div>
<hr>
<div class="container">
</div> --}}

@endsection