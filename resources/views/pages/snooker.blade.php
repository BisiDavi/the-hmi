@extends('layout')

@section('title')
  Snooker Returns -
@endsection

@section('link')
  <link rel="stylesheet" href="css/pages/snooker.css">
@endsection

@section('content')
  <div class="container-fluid snooker-return">
    <div class="banner">
      <div class="banner-text">
        <h1 class="banner-title text-center text-dark">
          Snooker Returns
        </h1>
        <p class="breadcrumbs text-center"> 
          <a href="/">Home</a> /
          <a href="/latest-news"> Latest News </a>
             / Snooker Returns</p>
      </div>
    </div>
    <div class="uploaded-post">
      <p>Great News Snooker Fans! – Snooker is now back at the HMI with a few restrictions. Call 01323 840459 to book by
        the hour.</p>
      <img src="{{ asset('images/snooker_image.png') }}" alt="HMI - Snooker is back at the HMI">
    </div>
    <div class="commment m-auto">
      <h3 class="text-center text-dark">Leave a Reply</h3>
      <hr class="m-auto w-25">
      <p class="text-center">Logged in as <a href="#GuestUser">Guest User.</a><a href="#logout">Log out?</a></p>
    </div>

    <a class="postbutton" href="#button">
      <button class="btn btn-light">Post Comment</button>
    </a>
  </div>
@endsection
