@extends('layouts.master')
@section('title')
    My Cart List |view
@endsection

@section('body')
  <section>
  <div class="list-cart-big-container">
    <div class="continue-shop-container">
      <i class="fa fa-angle-left"></i><h4>Continue shopping</h4>
    </div>
    <div class="cartlist-container">
      <div class="list-cart-all"style="background:orange">
        <h1>My shopping cart</h1>
        <div class="cart-list-labels">
          @if (Session::has('carted-products'))
            <h2>{{count(Session::get('carted-products'))}}ITEMS</h2>
          @else
            <h2>No items is in your cart</h2>
          @endif
          <span>
            <h3>ITEM PRICE</h3>
            <h3>QUANTITY</h3>
          </span>
        </div>
        @if (Session::has('carted-products'))
          @foreach (Session::get('carted-products') as $cartedEach)
              <div class="item-carted-data">
                <div class="left-side-icd">
                  <div class="product-carted-image">
                    <img src="/storage/uploads/{{$cartedEach->images[0]->name}}" alt="prod-image">
                  </div>
                  <div class="product-carted-data">
                    <ul>
                      <li><span id="big-carted-name">{{$cartedEach->name}}</span></li>
                      <li><span id="carted-company">{{$cartedEach->brand->name}}</span></li>
                      <li><span id="carted-item-remain">only {{$cartedEach->stock}} items remaining</span></li>
                      <h1><i class="fa fa-heart-o"></i> <span id="move-to-wish">Move to wishlist</span></h1>
                    </ul>
                  </div>
                </div>
                <div class="right-side-icd">
                  <div class="item-price-cart">
                    <h1>₱ {{number_format($cartedEach->price)}}</h1>
                  </div>
                  <div class="item-qty-cart">
                    <button type="button" id="minus-qty">-</button><input type="text" class="qty-input" name="quantity" value="1" readonly><button type="button" id="plus-qty">+</button>
                  </div>
                </div>
                <h2><i class="fa fa-times"></i></h2>
              </div>
          @endforeach
        @endif
      </div>
      <div class="order-summary" style="background-color:green">

      </div>
    </div>
  </div>
  </section>
@endsection
