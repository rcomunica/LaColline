@extends('layout')
@section('title', 'Welcome!')

@section('container')
@include('nav_top')
<section class="main_index">
    <div class="container_parallax-start position-relative"  style=" height: 100vh; padding: 0px; margin: 0">
    
    </div>
    <div class="container_parallax-1"  style=" height: 100vh; padding: 0px; margin: 0">
        <img class="" src="{{asset('upload/shop/2.png')}}" style="width: 370px"alt="">
    </div>
    <div class="container_parallax-2"  style=" height: 100vh; padding: 0px; margin: 0">
        <img src="{{ asset('assets/img/index/2(lateral).png') }}" class="" style="min-width: 370px" alt=".">
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