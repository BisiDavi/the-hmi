@extends('layout')

@section('title')
  Latest News -
@endsection

@section('link')
    <link rel="stylesheet" href="css/pages/latestnews.css">
@endsection

@section('content')
  <div class="latest-news">
    @include('includes.latestnews')
  </div>
@endsection
