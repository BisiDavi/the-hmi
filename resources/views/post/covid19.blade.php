@extends('layout')

@section('title')
  Covid 19 Measures -
@endsection

@section('link')
  <link rel="stylesheet" href="css/pages/covid19.css">
@endsection

@section('content')
  <div class="container-fluid covid-post">
    <div class="row">
      <div class="post-image">
        <img src="{{ asset('images/card-image-1.jpg') }}" alt="Covid 19 Measures">
      </div>
      <div class="post-tag">
        <a href="/latest-news"> Latest News</a>
      </div>
      <div class="post-date">
        <p>Jul</p>
        <hr>
        <p class="day">26</p>
        <hr>
        <p>2020</p>
      </div>
      <div class="post">
        <h1 class="post-title my-3">Guiding Principles to Keep in Mind</h1>
        <p>The more an individual interacts with others, and the longer that interaction, the higher the risk of COVID-19
          spread. The risk of COVID-19 spread increases in a restaurant or bar setting as follows:
        </p>
        <ul>
          <li><strong>Lowest Risk:</strong> Food service limited to drive-through, delivery, take-out, and curb-side pick
            up.</li>
          <li><strong>More Risk:</strong> Drive-through, delivery, take-out, and curb-side pick up emphasized. On-site
            dining limited to outdoor seating. Seating capacity reduced to allow tables to be spaced at least 6 feet
            apart.</li>
          <li><strong>Even More Risk:</strong> On-site dining with both indoor and outdoor seating. Seating capacity
            reduced to allow tables to be spaced at least 6 feet apart</li>
          <li><strong>Highest Risk:</strong> On-site dining with both indoor and outdoor seating. Seating capacity not
            reduced and tables not spaced at least 6 feet apart.</li>
        </ul>
      </div>
      <div class="commment m-auto">
        <h3 class="text-center text-dark">Leave a Reply</h3>
        <hr class="m-auto w-25">
        <p class="text-center">Logged in as <a href="#GuestUser">Guest User.</a><a href="#logout">Log out?</a></p>
      </div>
    </div>
    <a class="postbutton" href="#button">
      <button class="btn btn-light">Post Comment</button>
    </a>
  </div>
@endsection
