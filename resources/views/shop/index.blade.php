{{--
    Pagina anterior (si arka la caga de aca sacamos lo anteior)

  Este comando trae la informacion de layout 
  (head, scripts y footer)

@extends('layout')



@section('container')
@include('nav_top')
<div style="height: 100vh; padding: 0px; margin: 0">
    {{-- Tienda
    <section class="main-container">
    <div class="cards-container">


      {{-- Llama a la tabla productos y busca la informacion de cada una 
        (Nombre, precio, descripcion y nombre de la imagen) 

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
--}}

@extends('layout')
@section('title', 'Shop')


@section('container')
@include('nav_top')

<section class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">WITH LA COLLINE SARL</p>
                </div>
            </div>
</section>

<section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
              
                  
              
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                  @foreach ($products as $product)
                  <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('upload/shop/'.$product->image)}}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$product->name}}</h5>
                                    <!-- Product price-->
                                    ${{$product->price}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </section>

        {{-- localhost:8000 --}}
    

@endsection