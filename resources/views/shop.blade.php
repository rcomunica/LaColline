@extends('layout')

@section('container')
@include('nav_top')
<div style="height: 100vh; padding: 0px; margin: 0">
    {{-- Tienda --}}
    <section class="main-container">
    <div class="cards-container">

      <div class="product-card">
        <img src="{{asset('upload/shop/2.png')}}" alt="">
        <div class="product-info">
          <div>
            <p>$120,00</p>
            <p>Zapato</p>
          </div>
          <figure>
            <a href="" style="color: black"><i class="fas fa-shopping-cart"></i></a>
          </figure>
        </div>
      </div>

      <div class="product-card">
        <img src="{{asset('upload/shop/2.png')}}" alt="">
        <div class="product-info">
          <div>
            <p>$120,00</p>
            <p>Zapato</p>
          </div>
          <figure>
            <a href="" style="color: black"><i class="fas fa-shopping-cart"></i></a>
          </figure>
        </div>
      </div>
  </section>

</div>

@endsection