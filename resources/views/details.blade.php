@extends('layouts.base')
@php
  $header = 'none';
@endphp
@section('title', 'detailes')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ $product->gallery }}" class="img-fluid details-img" alt="{{ $product->name }}">
      </div>
      <div class="col-md-6">
        <div class="alert alert-secondary" role="alert">
          <h3 class="text-center text-primary fw-bold text-capitalize">{{ $product->name }}</h3>
        </div>
        <p class="p-1 text-secondary">Category: <span class="text-capitalize fst-italic">{{ $product->category }}</span></p>
        <p class="p-1 text-secondary">Material Description: <span class="text-capitalize fst-italic">{{ $product->description }}</span></p>
        <p class="p-1 text-secondary">Price: <span class="p-2 text-capitalize fst-italic badge bg-secondary fw-bold">Rs. {{ $product->price }}</span></p>
        <div class="my-4 d-flex justify-content-between">
          <button type="button" id="{{ $product->id }}" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Buy Now</button>
          <button type="button" id="{{ $product->id }}" class="btn btn-outline-warning"><i class="fas fa-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
  </div>

@endsection