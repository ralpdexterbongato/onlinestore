@extends('layouts.sideMaster')
@section('location')
  Vans
@endsection
@section('brands-li')
  @foreach($brands as $brand)
  <a href="#"><li>{{$brand->name}}</li></a>
  @endforeach
@endsection
@section('sideBody')
  <h1>Vans</h1>
  <div class="vehicle-container">
    <ul>
      @foreach($vans as $van)
      <li>
        <div class="image-separate">
          <img src="/storage/uploads/{{$van->images[0]->name}}">
        </div>
        <h1>{{$van->name}}</h1>
        <p>₱ {{number_format($van->price)}}</p>
        <div class="brand-item">
          {{$van->brand->name}}
        </div>
        <div class="triangle-top-right">
        </div>
        <div class="triangle-left">
        </div>
        <div class="modal-item">
            <a href="{{route('carting',[$van->id])}}"><i class="fa fa-shopping-cart"></i></a>
            <a href="#"><i class="fa fa-heart"></i></a>
            <a href="/products/{{$van->id}}"><i class="fa fa-eye"></i></a>
        </div>
      </li>
    @endforeach
  </ul>

  </div>
  <div class="pagination-contain">
    {!!$vans->links()!!}
  </div>
@endsection
