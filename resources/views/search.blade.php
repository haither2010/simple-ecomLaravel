@extends('layouts.base')

@section('title', 'Search Items')


@section('content')

<div class="container">
  <h3 class="p-3 my-3 text-center bg-light text-secondary">Search Results</h3>
  
  {{-- if it is containing any results make it true else make it false --}}
  @php
    $results = false;
    foreach($serachResults as $serachResult)
    {
      if ($serachResult->name) {
        $results = true;
      }else {
        $results = false;
      }
    }
  @endphp
  <div class="row">
    {{-- check availablity of ussesr input word --}}
    @if ($results)
      @foreach ($serachResults as $categoryItems)
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
        @endforeach
        {{-- print error if it is not matching anything with database --}}
      @else
        <p class="text-center text-danger">There is no item with this name</p>
      @endif
  </div>
</div>

@endsection