@extends('layout')

@section('title')
  Menu
@endsection

@section('link')
  <link rel="stylesheet" href="css/pages/menu2.css">
@endsection

@section('content')
  <div class="menu container">
    @include('includes.menu')

    <ul class="nav nav-pills row">
      <li class="col-lg-3 md-3 active">
        <a href="#1b" data-toggle="tab">
          <span class="title">Starters</span>
        </a>
      </li>
      <li class="col-lg-3 md-3">
        <a href="#2b" data-toggle="tab">
          <span class="title">Sides</span>
        </a>
      </li>
      <li class="col-lg-3 md-3">
        <a href="#3b" data-toggle="tab">
          <span class="title"> Mains</span>
        </a>
      </li>
      <li class="col-lg-3 md-3">
        <a href="#4b" data-toggle="tab">
          <span class="title"> Specials</span>
        </a>
      </li>
    </ul>

    <div class="tab-content clearfix  mt-5 mb-5">
      <div id="1b" class="tab-pane active starters">
        <div class="hmi-menu d-flex">
          <img src="{{ asset('images/gallery-2.jpg') }}" alt="our menu">
          <div class="menu-post">
            <span class="menu-name">
              Bruschetta
            </span>------------------------------------------------------------------------------------------------
            <span class="menu-price">£2.95</span> Simply the
            best bruschetta comprising of chopped tomatoes
            onions and pesto
          </div>
        </div>
      </div>
      <div class="tab-pane" id="2b">
        <ul>
          <li>
            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> Lorem ipsum </p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> dolor sit amet, consectetur</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> adipiscing elit,</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> sed do eiusmod</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> tempor incididunt</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> ut labore et dolore</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> magna aliqua.</p>
          </li>
        </ul>
      </div>
      <div class="tab-pane" id="3b">
        <ul>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> Lorem ipsum </p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> dolor sit amet, consectetur</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> adipiscing elit,</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> sed do eiusmod</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> tempor incididunt</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> ut labore et dolore</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> magna aliqua.</p>
          </li>
        </ul>
      </div>
      <div class="tab-pane" id="4b">
        <ul>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> Lorem ipsum </p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> dolor sit amet, consectetur</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> adipiscing elit,</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> sed do eiusmod</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> tempor incididunt</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> ut labore et dolore</p>
          </li>
          <li> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            <p> magna aliqua.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('footerlink')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection
