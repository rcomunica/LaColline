@extends('layout')

@section('container')
@include('nav_top')
<div style="height: 100vh; padding: 0px; margin: 0">
    {{-- Tienda --}}
    <section class="main-container">
    <div class="cards-container">

      @foreach($products as $product)
        <div class="product-card">
          <img src="{{asset('upload/shop/'.$product->image)}}" alt="{{$product->name}}">
          <div class="product-info">
            <div>
              <p>{{$product->name}}</p>
              <p>${{$product->price}}</p>
            </div>
            <figure>
              <a href="" style="color: black"><i class="fas fa-shopping-cart"></i></a>
            </figure>
          </div>
        @endforeach
      </div>
  </section>

</div>

@endsection