@extends('layouts.master')
@section('title')
  Item Info
@endsection
@section('body')
  <div class="view-item-top-container">
    <div class="item-title-container">
      <div class="left-title-side">
        <h1>{{$product->name}}</h1>
        <h2>Brand: {{$product->brand->name}}</h2>
        <a href="#">View more products from {{$product->brand->name}}</a>
      </div>
      <div class="right-title-side">
        <a href="#"><h3><i class="fa fa-heart"> </i> Add to wishlist</h3></a>
        <a href="#"><h4> <i class="fa fa-facebook-square">  </i>  Share</h4></a>
      </div>
    </div>
    <div class="item-info-container">
      <div class="image-tiny-big-container">
        <div class="item-pic-list">
          <ul>
            @foreach ($product->images as $image)
              <li class="small-thumbnail"><img src="/storage/uploads/{{$image->name}}" alt=""></li>
            @endforeach
          </ul>
        </div>
        <div class="item-bigpic">
          <ul>
            @foreach($product->images as $image)
            <li class="item-view-image"><img src="/storage/uploads/{{$image->name}}" alt=""></li>
            @endforeach
          </ul>
          <p>{{$product->description}}</p>
        </div>
      </div>
      <div class="addcart-options">
        <div class="details-item">
          <h1>Details</h1>
          <h2>Size: <span class="lato-font"> {{$product->size}}</span></h2>
          <h2>Stock: <span class="lato-font"> {{$product->stock}} remaining</span></h2>
          <h2>Colors available : <span class="lato-font"> {{$product->color}}</span></h2>
        </div>
        <div class="addcart-button">
          <h1>₱ {{number_format($product->price)}}</h1>
          <h2>Before <span class="before-price">₱ 200,000,000</span></h2>
          <h2>You saved 50%</h2>
          <button type="submit">ADD TO CART</button>
        </div>
      </div>
      <div class="delivery-options">
        <div class="delivery-options-top">
          <ul>
            <li>Save 20% Cash Fullpayment</li>
            <li>Available monthly payment</li>
            <li>Test drive available</li>
            <li>Warranty for 1 year</li>
            <li>1 Month maximum delivery duration</li>
            <li>Handled your vehicle with care</li>
          </ul>
        </div>
        <div class="delivery-options-bottom">
          <h1>Rating : <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h1>
          <h1>Rated : 23 times</h1>
          <h2>Rate this product <br><br><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="view-item-bottom-container" style="background-color:red">
    <div class="left-reviews-container" style="background-color:orange">
      <div class="also-buys" style="background-color:violet">
        <h1>People bought this product also bought</h1>
        <div class="related-container">
          <ul class="related-carousel">
            <li class="carousel-cell">
              <div class="image-separate">
                <img src="/designIMG/honda.jpeg">
              </div>
              <h1>name</h1>
              <p>₱ price</p>
              <div class="brand-item">
                brand
              </div>
              <div class="triangle-top-right">
              </div>
              <div class="triangle-left">
              </div>
              <div class="modal-item">
                  <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  <a href="#"><i class="fa fa-heart"></i></a>
                  <a href="products/"><i class="fa fa-eye"></i></a>
              </div>
            </li>
            <li class="carousel-cell">
              <div class="image-separate">
                <img src="/designIMG/honda.jpeg">
              </div>
              <h1>name</h1>
              <p>₱ price</p>
              <div class="brand-item">
                brand
              </div>
              <div class="triangle-top-right">
              </div>
              <div class="triangle-left">
              </div>
              <div class="modal-item">
                  <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  <a href="#"><i class="fa fa-heart"></i></a>
                  <a href="products/"><i class="fa fa-eye"></i></a>
              </div>
            </li>
            <li class="carousel-cell">
              <div class="image-separate">
                <img src="/designIMG/honda.jpeg">
              </div>
              <h1>name</h1>
              <p>₱ price</p>
              <div class="brand-item">
                brand
              </div>
              <div class="triangle-top-right">
              </div>
              <div class="triangle-left">
              </div>
              <div class="modal-item">
                  <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  <a href="#"><i class="fa fa-heart"></i></a>
                  <a href="products/"><i class="fa fa-eye"></i></a>
              </div>
            </li>
            <li class="carousel-cell">
              <div class="image-separate">
                <img src="/designIMG/honda.jpeg">
              </div>
              <h1>name</h1>
              <p>₱ price</p>
              <div class="brand-item">
                brand
              </div>
              <div class="triangle-top-right">
              </div>
              <div class="triangle-left">
              </div>
              <div class="modal-item">
                  <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  <a href="#"><i class="fa fa-heart"></i></a>
                  <a href="products/"><i class="fa fa-eye"></i></a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="ask-question" style="background-color:pink">
        <h1>Questions about this product</h1>
        <div class="asking" style="background-color:orange">
          <div class="ask-form">
            <form action="#" method="post">
              <label for="question"> Ask here :</label><textarea cols="59" name="question"></textarea><br>
              <button type="submit">Ask</button>
            </form>
          </div>
          <div class="FAQ-info" style="background-color:violet">
            <h2>FAQ <a href="#">click here</a></h2>
            <ul>
              <li>Can i return the product if i did not like it?</li>
              <li>How manny days do i have to wait?</li>
              <li>Do you deliver without any down-payment?</li>
              <li>Where are your branche's located?</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="reviews-from-buyer" style="background-color:green">
        <h1>Reviews/Comments for {{$product->name}}</h1>
        <div class="buyer-comments">
          <h2>By Firstname Lastname <span class="verified-buyer">verified purchase</span></h2>
          <p>This is my comment for thischansdajsjdajoduct hahahathis is it this is my comment i love my vehicle now</p>
        </div>
      </div>
    </div>
    <div class="right-best-sellers" style="background-color:blue">
      <h1>Checkout our best selling product's</h1>
      <ul>
        <li class="carousel-cell">
          <div class="image-separate">
            <img src="/designIMG/honda.jpeg">
          </div>
          <h1>name</h1>
          <p>₱ price</p>
          <div class="brand-item">
            brand
          </div>
          <div class="triangle-top-right">
          </div>
          <div class="triangle-left">
          </div>
          <div class="modal-item">
              <a href="#"><i class="fa fa-shopping-cart"></i></a>
              <a href="#"><i class="fa fa-heart"></i></a>
              <a href="products/"><i class="fa fa-eye"></i></a>
          </div>
        </li>
        <li class="carousel-cell">
          <div class="image-separate">
            <img src="/designIMG/honda.jpeg">
          </div>
          <h1>name</h1>
          <p>₱ price</p>
          <div class="brand-item">
            brand
          </div>
          <div class="triangle-top-right">
          </div>
          <div class="triangle-left">
          </div>
          <div class="modal-item">
              <a href="#"><i class="fa fa-shopping-cart"></i></a>
              <a href="#"><i class="fa fa-heart"></i></a>
              <a href="products/"><i class="fa fa-eye"></i></a>
          </div>
        </li>
        <li class="carousel-cell">
          <div class="image-separate">
            <img src="/designIMG/honda.jpeg">
          </div>
          <h1>name</h1>
          <p>₱ price</p>
          <div class="brand-item">
            brand
          </div>
          <div class="triangle-top-right">
          </div>
          <div class="triangle-left">
          </div>
          <div class="modal-item">
              <a href="#"><i class="fa fa-shopping-cart"></i></a>
              <a href="#"><i class="fa fa-heart"></i></a>
              <a href="products/"><i class="fa fa-eye"></i></a>
          </div>
        </li>
        <li class="carousel-cell">
          <div class="image-separate">
            <img src="/designIMG/honda.jpeg">
          </div>
          <h1>name</h1>
          <p>₱ price</p>
          <div class="brand-item">
            brand
          </div>
          <div class="triangle-top-right">
          </div>
          <div class="triangle-left">
          </div>
          <div class="modal-item">
              <a href="#"><i class="fa fa-shopping-cart"></i></a>
              <a href="#"><i class="fa fa-heart"></i></a>
              <a href="products/"><i class="fa fa-eye"></i></a>
          </div>
        </li>
      </ul>
    </div>
  </div>
@endsection
