@extends('layouts.master')
@section('title')
  Brands available
@endsection

@section('body')
<section>
  <div class="All-Brands-Container">
    <div class="All-Brands-Locator">
      <ul>
        <li>Home</li>
        <li><i class="fa fa-caret-right"></i></li>
        <li>Brands</li>
      </ul>
    </div>
    <div class="next-buttons-container">
    <p id="control_prev"> << </p>
    <p id="control_next"> >> </p>
      <div class="All-Brands-Slider">
          @foreach($brands as $brand)
          <div class="size all-b-slide">
            <h1 class="animated">{{$brand->name}}<h1>
          </div>
          @endforeach
      </div>
    </div>
    <div class="Promote-Brands">
      <p><span class="big">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</section>

@endsection
