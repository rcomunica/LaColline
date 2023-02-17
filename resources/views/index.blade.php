@extends('layout')
@section('title', 'Welcome!')

@section('container')
@include('nav_top')
<section class="main_index" data-scroll-container>

    

    <div data-scroll-section class="container_parallax-start position-relative main-title"  style=" height: 100vh; padding: 0px; margin: 0">
        <h1 data-scroll data-scroll-speed="2">LaColline Sarl</h1>
        <h2 data-scroll data-scroll-speed="1">Qualité garantie</h2>
        
    </div>
    <div class="container_parallax-1" id="trigger1" style=" height: 100vh; padding: 0px; margin: 0">
        <img id="pin1" class="" src="{{ asset('upload/shop/zapato-naranja.png') }}" style="width: 350px"alt="">
    </div>
    <div class="container_parallax-2" id="trigger2" style=" height: 100vh; padding: 0px; margin: 0">
        <img id="pin2" src="{{ asset('assets/img/index/2(lateral).png') }}" width="350px" class="" alt=".">
    </div>
    <div class="container_parallax-3"  style="background: var(--primary-color-500); height: 100vh; padding: 0px; margin: 0">
        
    </div>
    <div class="container_parallax-4"  style="background: var(--secondary-color-500); height: 100vh; padding: 0px; margin: 0">
        
    </div>
    <div class="container_parallax-4 bg-success"  style=" height: 100vh; padding: 0px; margin: 0">
        
    </div>
    <div class="container_parallax-end"  style="background: var(--last-color); height: 100vh; padding: 0px; margin: 0">
        
    </div>
</section>


@endsection