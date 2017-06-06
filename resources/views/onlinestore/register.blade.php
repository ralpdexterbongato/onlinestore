@extends('layouts.master')
@section('title')
  Online Store | Registration
@endsection
@section('body')
  <section>
    <div class="RegisterContainer">
      <div class="category">
        <div class="category-box">
          <ul>
            <li id="titlecat"><h1>Categories</h1></li>
            <li><a href="#">Fast Cars</a></li>
            <li> <a href="#">Motorbikes</a></li>
            <li><a href="#">Luxory Vans</a></li>
          </ul>
        </div>
      </div>
      <div class="regist-form">
          <div class="location-box">
            <h3><a href="/welcome">Home</a></h3><i class="fa fa-caret-right"></i><h3><a href="#">New account</a></h3>
          </div>
          <div class="form-box">
            <h1>New Account</h1>
            <div class="reg-inputs">
              <form action="/register" method="post">
               {{ csrf_field() }}
                <label>First name <span class="required">*</span></label><input type="text" name="fname" required><br>
                <label>Last name <span class="required">*</span></label><input type="text" name="lname" required><br>
                <label>Email <span class="required">*</span></label><input type="email" name="email" required><br>
                <label>Password <span class="required">*</span></label><input type="password" name="password" required><br>
                <label>Confirm password <span class="required">*</span></label><input type="password" name="password_confirmation" required><br>
                <button type="submit">Create</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  </section>
@endsection
