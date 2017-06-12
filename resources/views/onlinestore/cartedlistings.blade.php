@extends('layouts.master')
@section('title')
    My Cart List |view
@endsection

@section('body')
  <section>
  <div class="list-cart-big-container">
    <div class="continue-shop-container">
      <a href="#" onclick="backBtn()"><i class="fa fa-angle-left"></i><h4>Continue shopping</h4></a>
    </div>
    <div class="cartlist-container">
      <div class="list-cart-all">
        <h1>My shopping cart</h1>
        <div class="cart-list-labels">
          @if (Session::has('carted-products'))
            <h2>{{count(Session::get('carted-products'))}} ITEMS</h2>
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
                    <img src="/storage/uploads/{{$cartedEach->pic}}" alt="prod-image">
                  </div>
                  <div class="product-carted-data">
                    <ul>
                      <li><span id="big-carted-name">{{$cartedEach->name}}</span></li>
                      <li><span id="carted-company">{{$cartedEach->brand}}</span></li>
                      <li><span id="carted-item-remain">only {{$cartedEach->stock}} items remaining</span></li>
                      <h2><i class="fa fa-heart"></i> <span id="move-to-wish">Move to wishlist</span></h2>
                    </ul>
                  </div>
                </div>
                <div class="right-side-icd">
                  <div class="item-price-cart">
                    <h1>₱ {{number_format($cartedEach->price,'2','.',',')}}</h1>
                  </div>
                  <div class="item-qty-cart">
                    <button type="button" id="minus-qty{{$cartedEach->id}}">-</button><input type="text" class="qty-input{{$cartedEach->id}}" name="quantity" value="{{$cartedEach->qty}}" readonly><button type="button" id="plus-qty{{$cartedEach->id}}">+</button>
                    <form class="minus-submit{{$cartedEach->id}}" action="{{route('subqty',[$cartedEach->id])}}" method="post">{{ csrf_field() }}</form>
                    <form class="add-submit{{$cartedEach->id}}" action="{{route('addqty',[$cartedEach->id])}}" method="post">{{csrf_field()}}</form>
                  </div>
                </div>
                <h2><i class="fa fa-times"></i></h2>
              </div>
          @endforeach
        @endif
      </div>
      <div class="order-summary">
        <h1>Order summary</h1>
        <div class="subtotals">
          @if(Session::has('subtotalsT'))
            <span class="subtotal-data"><h2>Subtotal:</h2><p>₱ {{number_format(Session::get('subtotalsT')->subtotal, 2, '.', ',')}} </p></span>
            <span><h2>Installments:</h2><p>₱ {{number_format(Session::get('subtotalsT')->install,'2','.',',')}} per month</p></span>
          </div>
          <div class="total">
            <span><h3>Total:</h3><p>₱ {{number_format(Session::get('subtotalsT')->subtotal,'2','.',',')}}</p></span>
          @else
            <span class="subtotal-data"><h2>Subtotal:</h2><p>₱ 0.00 </p></span>
            <span><h2>Installments:</h2><p>₱ 0.00 per month</p></span>
          </div>
          <div class="total">
            <span><h3>Total:</h3><p>₱ 0.00</p></span>

          @endif
          <div class="button-checkout">
            <h6>PROCEED TO CHECKOUT</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="Payment-FAQ-container">
      <div class="payment-FAQ">
        <h1 class="wow fadeInUp" data-wow-duration="1.5s">When will i recieve my item?</h1>
        <p class="wow fadeInUp" data-wow-duration="2.5s">
          The delivery timeframe is an estimate of when your item will be delivered to your shipping address. This includes order verification, item processing, plus carrier shipment times.<br>
          We will provide more accurate information on your delivery dates during the checkout process.<br>
          Learn more about Shipping & Delivery.
        </p>
      </div>
      <div class="payment-FAQ">
        <h1 class="wow fadeInUp" data-wow-duration="2.5s">What payment method could i use?</h1>
        <p class="wow fadeInUp" data-wow-duration="3s">To bring you the best online shopping experience, Lazada offers multiple payment methods:<br>
            Cash On Delivery,<br>
            Credit/ Debit Card (Mastercard, Visa, AMEX and JCB),<br>
            BDO Installment,<br>
            MegaLink,<br>
            Philippine-Paypal accounts,<br>
            Ipay88 (Bancnet),<br>
            Philippine-Alipay accounts,<br>
            Learn more about Payment options.
        </p>
      </div>
      <div class="payment-FAQ">
        <h1 class="wow fadeInUp" data-wow-duration="3.5s">How safe is my account with Xcart?</h1>
        <p class="wow fadeInUp" data-wow-duration="4s">All items on Lazada are guaranteed to be new, genuine, not defective or damaged.<br>
            If this is not the case, you can return within 7 days for a full refund. Additionally, items covered under Satisfaction Guaranteed can be returned within 14 days from the date of delivery.<br>
            Learn more about Returns & Refunds.
        </p>
      </div>
    </div>
    <div class="payment-methods-services">
      <div class="methods-ops">
        <h1>Payment methods</h1>
        <div class="method-logo">
           <div class="payment-logo-contain">
             <img src="/designIMG/logopayment1.jpg" alt="paypal">
           </div>
           <div class="payment-logo-contain">
             <img src="/designIMG/logopayment2.jpg" alt="mastercard">
           </div>
           <div class="payment-logo-contain">
              <img src="/designIMG/logopayment3.jpg" alt="bdo">
           </div>
           <div class="payment-logo-contain">
             <img src="/designIMG/jcb-logo.jpg" alt="jcb">
           </div>
        </div>
      </div>
      <div class="delivery-ops">
        <h1>Delivery-services</h1>
        <div class="delivery-service">
          <div class="delivery-box">
            <img src="/designIMG/lbc.png" alt="services1">
          </div>
          <div class="delivery-box2">
            <img src="/designIMG/lex.png" alt="services2">
          </div>
        </div>
      </div>
      <div class="sealing">
        <h1>Verified by</h1>
        <div class="verified-by">
          <img class="wow rollIn" data-wow-duration="3s" src="/designIMG/seal.png" alt="verified-seal">
        </div>
      </div>
    </div>
  </div>
  </section>
@endsection
