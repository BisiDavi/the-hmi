@extends('layout')

@section('title')
  Specials -
@endsection

@section('link')
  <link rel="stylesheet" href="css/pages/special2.css">
@endsection

@section('content')
  <div class="container-fluid special-page">
    <div class="row">
      <div class="section-banner">
        <h1 class="section-title text-dark">
          Special Offers
        </h1>
        <hr class="m-auto border-warning">
      </div>
    </div>
    <div class="row">
      <div class="col-6 image">
        <img src="{{ asset('images/offer-image-1.jpg') }}" alt="Early Bird Specials">
      </div>
      <div class="col-6 specials2">
        <h2 class="title">
          <a href="/early-bird-specials">Early Bird Specials</a>
        </h2>

        <h6>Specials Offers</h6>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero atque incidunt repellat, doloribus id facere
          pariatur porro totam. Eum molestias voluptate vero magni dolore iste consequuntur voluptas reprehenderit
          inventore architecto.
        </p>
        <h3 class="offer-date">Offer Date: 00/ 00 / 0000</h3>
        <h3 class="offer-date">Offer Time: 00 : 00 </h3>

        <a href="/early-bird-specials">Show More ‣></a>
      </div>
    </div>
    <div class="row">
      <div class="col-6 image">
        <img src="{{ asset('images/gallery-1.jpg') }}" alt="Half Price Drinks">
      </div>
      <div class="col-6 specials2">
        <h2 class="title">
          <a href="/half-price-drinks">Half Price Drinks</a>
        </h2>

        <h6>Specials Offers</h6>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero atque incidunt repellat, doloribus id facere
          pariatur porro totam. Eum molestias voluptate vero magni dolore iste consequuntur voluptas reprehenderit
          inventore architecto.
        </p>
        <h3 class="offer-date">Offer Date: 00/ 00 / 0000</h3>
        <h3 class="offer-date">Offer Time: 00 : 00 </h3>

        <a href="/half-price-drinks">Show More ‣></a>
      </div>
    </div>
    <div class="row">
      <div class="col-6 image">
        <img src="{{ asset('images/offer-image-3.jpg') }}" alt="2 For 1 Burgers">
      </div>
      <div class="col-6 specials2">
        <h2 class="title">
          <a href="/2-for-1-burger">2 For 1 Burgers</a>
        </h2>

        <h6>Specials Offers</h6>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero atque incidunt repellat, doloribus id facere
          pariatur porro totam. Eum molestias voluptate vero magni dolore iste consequuntur voluptas reprehenderit
          inventore architecto.
        </p>
        <h3 class="offer-date">Offer Date: 00/ 00 / 0000</h3>
        <h3 class="offer-date">Offer Time: 00 : 00 </h3>

        <a href="/2-for-1-burger">Show More ‣></a>
      </div>
    </div>
  </div>
@endsection
