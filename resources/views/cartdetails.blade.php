@php
  use Illuminate\Support\Str;
@endphp

@extends('layouts.loginBase')

@section("title", "Cart Details")


{{-- here extended base of loginBase --}}
@section('content')
  <div class="container my-4">
    <div class="d-flex justify-content-center">
      <a href="/ordernow" class="me-2 btn btn-success"><i class="fas fa-shopping-cart"></i> Order now</a>
      <a href="/" class="ms-2 btn btn-primary"><i class="fas fa-cart-plus"></i> Add more..</a>
    </div>
    @foreach ($products as $product)
      <div class="row">
        <div class="d-flex align-items-center">
          <div class="p-2 cart-col">
            <img class="rounded img-fluid" src="{{ $product->gallery }}" alt="" width="100" height="100">
          </div>
          <div class="cart-col p3 d-none d-sm-block">
            <p>{{ Str::limit($product->description, 70) }}</p>
          </div>
          <div class="p-1 p-sm-3 cart-col">
            <p><span class="d-none d-sm-block">Rs. </span>{{ $product->price }}</p>
          </div>
          <div class="p-3 cart-col form-col">
            <form action="" method="post">
              <input class="form-control" type="text" name="qty" id="qty" value="1">
            </form>
          </div>
          <div class="p-2 cart-col">
            <a class="btn btn-danger btn-sm" href="/remove-cart/{{ $product->cart_id }}"><i class="fas fa-minus-circle"></i></a>
          </div>
          
        </div>
      </div>
    @endforeach

    <div class="d-flex justify-content-center">
      <a href="/ordernow" class="me-2 btn btn-success"><i class="fas fa-shopping-cart"></i> Order now</a>
      <a href="/" class="ms-2 btn btn-primary"><i class="fas fa-cart-plus"></i> Add more..</a>
    </div>
    
  </div>
@endsection