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
    <div class="cartlist-container" style="background:pink">
      <div class="list-cart-all"style="background:orange">
        <h1>My shopping cart</h1>
        <div class="cart-list-labels">
          <h2>10 ITEMS</h2>
          <span>
            <h3>ITEM PRICE</h3>
            <h3>QUANTITY</h3>
          </span>
        </div>
        <div class="item-carted-data" style="background:#e5e5e5;">
          <div class="left-side-icd" style="background:yellow">
            <div class="product-carted-image">
              <img src="/designIMG/honda.jpeg" alt="prod-image">
            </div>
            <div class="product-carted-data">
              <ul>
                <li><span id="big-carted-name">Fernando WSCE-F410 Acoustic Guitar Cutaway with Equalizer and Tuner (Natural)</span></li>
                <li><span id="carted-company">Lamborghini</span></li>
                <li><span id="carted-item-remain">only 3 items remaining</span></li>
                <h1><i class="fa fa-heart-o"></i> <span id="move-to-wish">Move to wishlist</span></h1>
              </ul>
            </div>
          </div>
          <div class="right-side-icd" style="background:green">
            <div class="item-price-cart">
              $92922929929
            </div>
            <div class="item-qty-cart">
              <input type="text" name="quantity">
            </div>
          </div>
        </div>
      </div>
      <div class="order-summary" style="background-color:green">

      </div>
    </div>
  </div>
  </section>
@endsection
