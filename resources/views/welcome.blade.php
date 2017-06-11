@extends('layouts.master')
@section('title')
Welcome |Log In/Sign Up
@endsection
@section('body')
<section>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="/designIMG/luxhero1.jpg" alt="hero1">
            <div class="carousel-caption">
              <h1 class="animated bounceInLeft">" We are selling anywhere</h1>
              <p class="animated bounceInRight"> on the globe "</p>
            </div>
          </div>
          <div class="item">
            <img src="/designIMG/luxhero2.jpg" alt="hero2">
            <div class="carousel-caption">
              <h1 class="animated bounceInLeft">" We are always ready to</h1>
              <p id="herocap" class="animated bounceInRight">serve you "</p>
            </div>
          </div>
          <div class="item">
            <img src="/designIMG/herolux3.jpg" alt="hero3">
            <div class="carousel-caption">
              <h1 class="animated bounceInLeft">" No worries about the</h1>
              <p class="animated bounceInRight">delivery "</p>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>


    <div class="tripic-container">
      <h1 class="wow fadeInUp" data-wow-duration="1s"> Available categories </h1>
      <p class="tripic-parag wow fadeInUp" data-wow-duration="2s">labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="tri-pics">
            <ul>
                <div><li><a href="{{route('motor.cat')}}"><img src="/designIMG/motor.jpg"></a><p class="wow fadeInUp" data-wow-duration="1s"> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p></li></div>
                <div><li><a href="{{route('cars.cat')}}"><img src="/designIMG/carwel.jpg"></a><p class="wow fadeInUp" data-wow-duration="2s"> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p></li></div>
                <div><li><a href="{{route('vans.cat')}}"><img src="/designIMG/vanbutton.jpg"></a><p class="wow fadeInUp" data-wow-duration="3s">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p></li></div>
            </ul>
        </div>
    </div>
    <div class="featured-container">
        <h2 class="wow fadeInUp" data-wow-duration="2s"> Check our latest product's </h2>
        <div class="featured-images">
            <ul id="owl-demo" class="owl-carousel owl-theme">
            @if(isset($features))
              @foreach ($features as $feature)
                <li>
                  <div class="image-separate">
                    <img src="/storage/uploads/{{ $feature->images[0]->name}}">
                  </div>
                  <h1>{{ $feature->name}}</h1>
                  <p>₱ {{ $feature->price}}</p>
                  <div class="brand-item">
                    {{ $feature->brand->name}}
                  </div>
                  <div class="triangle-top-right">
                  </div>
                  <div class="triangle-left">
                  </div>
                  <div class="modal-item">
                      <a href="{{route('carting',[$feature->id])}}"><i class="fa fa-shopping-cart"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                      <a href="{{route('products.show',[ $feature->id])}}"><i class="fa fa-eye"></i></a>
                  </div>
                </li>
              @endforeach
            @endif
            </ul>
        </div>
    </div>
    <div class="brandnames">
      <h2 class="wow fadeInUp" data-wow-duration="1s"> Find your favourite brand here </h2>
      <p id="brandname-parag" class="wow fadeInUp" data-wow-duration="2s">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

        <div class="image-container">
        @if(isset($features))
        <div class="owl-wrapper">
          <div class="owl-brand owl-carousel owl-theme">
            @foreach($brands as $brand)
            <div class="brandlist"><h4>{{$brand->name}}</h4></div>
            @endforeach
          </div>
        </div>
        @endif
        </div>
    </div>
</section>
@endsection
