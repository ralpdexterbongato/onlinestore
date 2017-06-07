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
  <div class="view-item-bottom-container">
    <div class="left-reviews-container" >
      <div class="also-buys">
        <h1>People bought this product also bought</h1>
        <div class="related-container">
          <ul class="related-carousel">
            @foreach ($relateProducts as $relateProduct)
              <li class="carousel-cell">
                <div class="image-separate">
                  <img src="/storage/uploads/{{$relateProduct->images[0]->name}}">
                </div>
                <h1>{{$relateProduct->name}}</h1>
                <p>₱ {{number_format($relateProduct->price)}}</p>
                <div class="brand-item">
                  {{$relateProduct->brand->name}}
                </div>
                <div class="triangle-top-right">
                </div>
                <div class="triangle-left">
                </div>
                <div class="modal-item">
                    <a href="{{route('carting',[$relateProduct->id])}}"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#"><i class="fa fa-heart"></i></a>
                    <a href="{{route('products.show',[$relateProduct->id])}}"><i class="fa fa-eye"></i></a>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="ask-question">
        <h1>Have questions about this product?</h1>
        <div class="asking">
          @if (Auth::check())
          <div class="ask-form">
            <form action="#" method="post">
              <label for="question"> Ask here :</label><textarea cols="59" name="question"></textarea><br>
              <button type="submit">Ask</button>
            </form>
          </div>
        @else
          <div class="ask-not-login">
            <h1>Only logged in users are allowed to ask</h1>
            <div class="login-reg-ask">
              <a  id="ask-login">Login</a> | <a href="{{route('registering')}}">Register</a>
            </div>
          </div>
        @endif
          <div class="FAQ-info">
            <h2>FAQ <a href="#">Click here</a></h2>
            <ul>
              <li>Can i return the product if i did not like it?</li>
              <li>How manny days do i have to wait?</li>
              <li>Do you deliver without any down-payment?</li>
              <li>Where are your branche's located?</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="reviews-from-buyer">
        <h1>Reviews/Comments for {{$product->name}}</h1>
        <div class="buyer-comments">
          <h5 class="time-passed">1 week ago</h5>
          <h2>By Ralp Dexter Bongato <br><span class="verified-buyer"><i class="fa fa-check-circle"></i> verified purchase</span></h2>
          <p>at nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3><i class="fa fa-thumbs-up"></i>  5 people found this helpful</h3>
        </div>
        <div class="buyer-comments">
          <h5 class="time-passed">1 week ago</h5>
          <h2>By Ralp Dexter Bongato <br><span class="verified-buyer"><i class="fa fa-check-circle"></i> verified purchase</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3><i class="fa fa-thumbs-up"></i>  5 people found this helpful</h3>
        </div>
        <div class="buyer-comments">
          <h5 class="time-passed">1 week ago</h5>
          <h2>By Ralp Dexter Bongato <br><span class="verified-buyer"><i class="fa fa-check-circle"></i> verified purchase</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3><i class="fa fa-thumbs-up"></i>  5 people found this helpful</h3>
        </div>
        <div class="AddReviews-comments">
          <div class="comment-section" >
            <h1>What are your thoughts on this product?</h1>
            <textarea name="name" placeholder="Write your comment . . ."></textarea><br>
            <button type="submit">Submit</button>
          </div>
          <div class="rating-section">
            <h1>Rate this product</h1>
            <p><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></p>
            <h3>3 Stars</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="right-best-sellers" >
      <h1>Checkout our best selling product's</h1>
      <ul>
        @foreach ($topsellings as $topselling)
        <li>
          <div class="image-separate">
            <img src="/storage/uploads/{{ $topselling->images[0]->name}}">
          </div>
          <h1>{{ $topselling->name}}</h1>
          <p>₱ {{ $topselling->price}}</p>
          <div class="brand-item">
            {{ $topselling->brand->name}}
          </div>
          <div class="triangle-top-right">
          </div>
          <div class="triangle-left">
          </div>
          <div class="modal-item">
              <a href="#"><i class="fa fa-shopping-cart"></i></a>
              <a href="#"><i class="fa fa-heart"></i></a>
              <a href="{{route('products.show',[ $topselling->id])}}"><i class="fa fa-eye"></i></a>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
