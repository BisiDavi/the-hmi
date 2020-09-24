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

    <div class="row">
      <div class="col-lg-3 md-3">
        <a href="#starters">
          <button class="btn btn-light button">Starters</button>
        </a>
      </div>
      <div class="col-lg-3 md-3">
        <a href="#Sides">
          <button class="btn btn-light button">Sides</button>
        </a>
      </div>
      <div class="col-lg-3 md-3">
        <a href="#Mains">
          <button class="btn btn-light button">Mains</button>
        </a>
      </div>
      <div class="col-lg-3 md-3">
        <a href="#Specials">
          <button class="btn btn-light button">Specials</button>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="starters menu-item">
        <img src="{{ asset('gallery-2.jpg') }}" alt="our menu">
        <div class="menu-post">
          Bruschetta ---------------------------------£2.95 Simply the best bruschetta comprising of chopped tomatoes
          onions and pesto
        </div>
      </div>
      <div class="sides menu-item">
        <div class="container">
          <ul>
            <li> <button class="rounded-circle">></button>
              Lorem ipsum </li>
            <li> <button class="rounded-circle">></button>
              dolor sit amet, consectetur</li>
            <li> <button class="rounded-circle">></button>
              adipiscing elit,</li>
            <li> <button class="rounded-circle">></button>
              sed do eiusmod</li>
            <li> <button class="rounded-circle">></button>
              tempor incididunt</li>
            <li> <button class="rounded-circle">></button>
              ut labore et dolore</li>
            <li> <button class="rounded-circle">></button>
              magna aliqua.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
