@extends('layout')

@section('title')
  Contact us -
@endsection

@section('link')
  <link rel="stylesheet" href="css/pages/contact.css">
@endsection

@section('content')
  <div class="contact-page">
    <section class="contact container-fluid">
      <div class="bg-overlay"></div>
      <div class="content">
        <h1 class="text-center">Get In Touch !</h1>
        <hr class="m-auto">
        <form action="" class="contact-form my-5">
          <div class="row">
            <div class="name col-lg-4 col-md-3 col-xs-12">
              <label for="name">Your name</label>
              <input type="text" placeholder="John Doe">
            </div>
            <div class="email col-lg-4 col-md-3 col-xs-12">
              <label for="email">Email address *</label>
              <input type="email" placeholder="example@domain.com">
            </div>
            <div class="phone col-lg-4 col-md-3 col-xs-12">
              <label for="phone">Email address *</label>
              <input type="email" placeholder="+1-999-999-9999">
            </div>
          </div>
          <div class="row formmessage">
            <div class="message d-flex">
              <label for="message">Message *</label>
              <textarea name="message" id="message" cols="30" rows="10">Tell us briefly about your needs?</textarea>
            </div>
          </div>
          <button class="btn btn-warning">
            Send
          </button>
        </form>
        <div class="card-group mb-3">
          <div class="card">
            <span class="icon my-4 mx-auto">
              <img src="{{ asset('images/map.svg') }}" alt="map">
            </span>
            <p class="card-text text-center font-weight-bold">
              Western Road, Hailsham, BN27 3DN
            </p>
          </div>
          <div class="card">
            <span class="icon my-4 mx-auto">
               <img src="{{ asset('images/mobile-phone.svg') }}" alt="map">
            </span>
            <p class="card-text text-center font-weight-bold">
              (01323) 840459
            </p>
          </div>
          <div class="card">
            <span class="icon my-4 mx-auto">
              <img src="{{ asset('images/email.svg') }}" alt="map">
            </span>
            <p class="card-text text-center font-weight-bold">
              office@thehmi.co.uk
            </p>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection
