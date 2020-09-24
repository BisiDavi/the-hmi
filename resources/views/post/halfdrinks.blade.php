@extends('layout')

@section('title')
  Half Price Drink -
@endsection

@section('link')
  <link rel="stylesheet" href="css/pages/covid19.css">
@endsection

@section('content')
  <div class="container-fluid covid-post">
    <div class="row">
      <div class="post-image">
        <img src="{{ asset('images/gallery-1.jpg') }}" alt="Covid 19 Measures">
      </div>
      <div class="post-tag">
        <a href="/special-2">Special Offers</a>
      </div>
      <div class="post-date">
        <p>Jul</p>
        <hr>
        <p class="day">28</p>
        <hr>
        <p>2020</p>
      </div>
      <div class="post">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat
        </p>
        <h3 class="offer-date"><span>Offer Date : </span> 00/ 00 / 0000</h3>
        <h3 class="offer-date"><span>Offer Time : </span> 00 : 00 </h3>
      </div>
    </div>
  </div>
@endsection
