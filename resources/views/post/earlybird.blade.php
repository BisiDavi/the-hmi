@extends('layout')

@section('title')
  Early Bird Specials -
@endsection

@section('link')
  <link rel="stylesheet" href="css/pages/covid19.css">
@endsection

@section('content')
  <div class="container-fluid covid-post">
    <div class="row">
      <div class="post-image">
        <img src="{{ asset('images/offer-image-1.jpg') }}" alt="Covid 19 Measures">
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
        <p>Spice up your life with HMI’s latest taste of India Two perfectly seasoned and full flavoured Currys are here to tickle your taste buds. We have a choice of our take on the traditional Chicken Tikka Masala & our vegetarian Butternut Squash, Spinach and Chick Pea. Served with yellow rice, 2 naan bread and a handful of miniature popadoms.
        </p>
        <h3 class="offer-date"><span>Offer Date : </span> 00/ 00 / 0000</h3>
        <h3 class="offer-date"><span>Offer Time : </span> 00 : 00 </h3>
      </div>
    </div>
  </div>
@endsection
