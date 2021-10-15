@php
  use Illuminate\Support\Str;
@endphp

@extends('layouts.loginBase')

@section("title", "Cart Details")


{{-- here extended base of loginBase --}}
@section('content')
  <div class="container my-4">

    <table class="table p-2">
      <thead class="">
        <th>Description</th>
        <th class="alend">Amount</th>
      </thead>
     <tbody class="">
        <tr>
          <td class="">Tottal Amount</td>
          <td class="alend">Rs. {{ $total }}.00</td>
        </tr>
        <tr>
          <td class="">Tax (3%)</td>
          <td class="alend">Rs. {{ $tax = 3 / 100 * $total  }}.00</td>
        </tr>
        <tr>
          <td class="">Delivery Charge</td>
          <td class="alend">Rs. {{ $del = 500 }}.00</td>
        </tr>
      </tbody>
      <footer>
        <tr>
          <td class="">Total Amount</td>
          <td class="alend fw-bold">Rs. {{ $total + $tax + $del }}.00</td>
        </tr>
      </footer>
    </table>

    <form class="" action="" method="post">
      @csrf
      
      <div class="mb-3">
          <label for="" class="form-label">Your address</label>
          <textarea class="form-control" name="address" id="" placeholder="Please enter your address" required></textarea>
        </div>
      
        <div class="my-3 form-check">
          <input type="radio" class="form-check-input" id="cart" name="paycart" selected>
          <label class="form-check-label" for="cart">Pay via cart</label>
        </div>    
        <div class="my-3 form-check">
          <input type="radio" class="form-check-input" id="cash" name="cash">
          <label class="form-check-label" for="cash">Cash on Deliveryt</label>
        </div>    
        <div class="my-3 form-check">
          <input type="radio" class="form-check-input" id="easycash" name="easycash">
          <label class="form-check-label" for="easycash">Pay via easy cach</label>
        </div>    
        <div class="my-4">
          <a class="btn btn-success" href="#"><i class="fab fa-paypal"></i> Pay Amount</a>
        </div>
    </form>

  </div>
@endsection