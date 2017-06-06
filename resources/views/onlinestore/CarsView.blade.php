@extends('layouts.sideMaster')
@section('location')
  Cars
@endsection
@section('brands-li')
  @foreach($brands as $brand)
  <a href="#"><li>{{$brand->name}}</li></a>
  @endforeach
@endsection
@section('sideBody')
  <h1>Cars</h1>
  <div class="vehicle-container">
    <ul>
      @foreach($cars as $car)
      <li>
        <div class="image-separate">
          <img src="/storage/uploads/{{$car->images[0]->name}}">
        </div>
        <h1>{{$car->name}}</h1>
        <p>₱ {{number_format($car->price)}}</p>
        <div class="brand-item">
          {{$car->brand->name}}
        </div>
        <div class="triangle-top-right">
        </div>
        <div class="triangle-left">
        </div>
        <div class="modal-item">
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
            <a href="#"><i class="fa fa-heart"></i></a>
            <a href="products/{{$car->id}}"><i class="fa fa-eye"></i></a>
        </div>
      </li>

    @endforeach
  </ul>

  </div>
  <div class="pagination-contain">
    {{$cars->links()}}
  </div>
@endsection
