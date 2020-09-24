@extends('layout')

@section('title')
  Reduced Opening Hours -
@endsection

@section('link')
  <link rel="stylesheet" href="css/pages/snooker.css">
@endsection

@section('content')
  <div class="container-fluid snooker-return">
    <div class="banner">
      <div class="banner-text">
        <h1 class="banner-title text-center text-dark">
          Reduced Opening Hours
        </h1>
        <p class="breadcrumbs text-center">
          <a href="/"> Home </a> /
          <a href="/latest-news">Latest News </a> / Reduced Opening Hours</p>
      </div>
    </div>
    <div class="uploaded-post">
      <p>Slightly adjusted opening hours to mean that the bar will be open earlier on Thursdays and Fridays through ‘til
        close. Full list of opening times below. This means that lunch will be available on Thursdays and we will also be
        holding afternoon bingo at 1.30 pm. Hope to see you there!!</p>
      <img style="margin:auto !important; display:flex;" src="{{ asset('images/reduced_hours.jpg') }}"
        alt="Reduced Opening Hours post">
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
