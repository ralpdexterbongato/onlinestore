@extends('layouts.sideMaster')
@section('title')
  Motorcycles Category
@endsection
@section('brands-li')
  @foreach($brands as $brand)
  <a href="#"><li>{{$brand->name}}</li></a>
  @endforeach
@endsection
@section('location','Motor')
@section('sideBody')
<h1>Motors</h1>
<div class="vehicle-container">
  <ul>
    @foreach($motors as $motor)
    <li>
      <div class="image-separate">
        <img src="/storage/uploads/{{$motor->images[0]->name}}">
      </div>
      <h1>{{$motor->name}}</h1>
      <p>₱ {{number_format($motor->price, 2, '.', ',')}}</p>
      <div class="brand-item">
        {{$motor->brand->name}}
      </div>
      <div class="triangle-top-right">
      </div>
      <div class="triangle-left">
      </div>
      <div class="modal-item">
          <a href="{{route('carting',[$motor->id])}}"><i class="fa fa-shopping-cart"></i></a>
          <a href="#"><i class="fa fa-heart"></i></a>
          <a href="/products/{{$motor->id}}"><i class="fa fa-eye"></i></a>
      </div>
    </li>
  @endforeach
</ul>

</div>
<div class="pagination-contain">
  {!!$motors->links()!!}
</div>
@endsection
