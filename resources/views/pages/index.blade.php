@extends('layout')

@section('content')
  <div class="landingpage">
    @include('partials.slider')
    @include('includes.events')
    @include('includes.specials')
    @include('includes.menu')
    @include('includes.latestnews')
    @include('includes.gallery')
    @include('includes.contact')
  </div>
@endsection
