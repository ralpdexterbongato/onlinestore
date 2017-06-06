@extends('layouts.master')
@section('title')
  Add new products
@endsection
@section('body')
<section>
  <div class="MakeProduct-Container">
      <div class="products-create-locator">
        <ul>
          <li class="not-mobile"><a href="#">Home</a></li>
          <li><i class="fa fa-caret-right"></i></li>
          <li><a href="#">Products</a></li>
          <li><i class="fa fa-caret-right"></i></li>
          <li><a href="#">Create</a></li>
        </ul>
      </div>
      <div class="form-and-aside">
        <div class="make-product-form">
          <form action="{{route('products.store')}}" class="form-product" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            <label>Name :</label><input type="text" name="name" value="{{old('name')}}"><br>
            <label>Description :</label><textarea name="description" value="{{old('description')}}"></textarea><br>
            <label>Stock :</label><input type="text" name="stock" value="{{old('stock')}}"><br>
            <label>Images :</label><input type="file" name="image[]" accept="image/*" multiple value="{{old('image[]')}}"><br>
            <label>Sizes :</label><input type="text" name="size" value="{{old('size')}}"><br>
            <label>Colors :</label><input type="text" name="color" value="{{old('color')}}"><br>
            <label>Price :</label><input type="text" class="price" name="price" value="{{old('price')}}"><br>
            <label>Category :</label>
            <select name="category">
              <option value="">Select a category</option>
              <option value="motorcycles">Motorcycles</option>
              <option value="cars">Cars</option>
              <option value="vans">Vans</option>
            </select><br>
            <label>Brand :</label>
            <select name="brand_id">
                <option value="">Select a brand</option>
                @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select><br>
            <button type="submit">Create</button>

          </form>
        </div>
        <div class="Info-Separator">
          <div class="latest-added-info">
            @foreach($NewProduct as $newProd)
            <div class="recent-title">
              <h1>Recently Added {{$newProd->created_at->diffForHumans()}}</h1>
            </div>
            <div class="recent-product-image">
              <div class="r-p-container" style="background-image:url('/storage/uploads/{{$newProd->images[0]->name}}')">
              </div>
            </div>
            <div class="recent-product-name">
              <h1>{{$newProd->name}}</h1>
              <p>{{$newProd->description}}</p>
            </div>
            @endforeach
          </div>
          <div class="bottom-info">
          </div>
      </div>
  </div>
  <div class="modal-for-errors">
    <div class="modal-error-block">
      <h1>Ooops !</h1>
      @if (count($errors)>0)
        @foreach($errors->all() as $error)
          <p><span class="required">* </span>{{$error}}</p>
        @endforeach
      @endif
      <button id="tryagain">Try again</button>
    </div>
  </div>
</section>
@endsection
