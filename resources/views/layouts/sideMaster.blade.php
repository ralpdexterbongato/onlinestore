@extends('layouts.master')
@section('body')
  <div class="sidemasterContainer">
    <div class="sidenav">
      <div class="categories">
        <h1>Categories</h1>
        <ul>
          <a href="{{route('cars.cat')}}"><li>Cars</li></a>
          <a href="{{route('motor.cat')}}"><li>Motorcycles</li></a>
          <a href="{{route('vans.cat')}}"><li>Vans</li></a>
        </ul>
      </div>
      <div class="sideBrand">
        <h1>Brands</h1>
        <ul>
          @section('brands-li')
          @show
        </ul>
      </div>
    </div>
    <div class="middlecontents">
      <div class="mapper">
        <div class="map">
         <ul>
           <li>Home</li>
           <li><i class="fa fa-angle-right"></i></li>
           <li>@yield('location')</li>
         </ul>
        </div>
      </div>
      <div class="listavailable">
      @section('sideBody')
      @show
      </div>
    </div>
  </div>
@endsection
