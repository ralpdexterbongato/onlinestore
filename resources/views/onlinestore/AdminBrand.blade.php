@extends('layouts.master')
@section('title')
  Add New Brand
@endsection
@section('body')
<section>
  <div class="brands-create-container">
    <div class="form-brand-container">
      <h1>Add brand</h1>
      <div class="form-brand">
        <form action="\brands" method="post">
          {{ csrf_field() }}
          <label>Brand name :</label><input type="text" name="name"><br>
          <label>About :</label><textarea name="about" rows="8"></textarea><br>
          <label>Owned by :</label><input type="text" name="owner"><br>
          <button type="submit">Create</button>
        </form>
      </div>
    </div>
    <div class="sample-brands">
      @foreach($tri_brands as $tri_brand)
      <div class="brand-box">
        <label>{{$tri_brand->name}}</label>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
