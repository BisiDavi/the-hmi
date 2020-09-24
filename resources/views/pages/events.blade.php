@extends('layout')

@section('title')
  Events for {{ date('M Y') }} -
@endsection


@section('content')
  <div class="content">
    @include('includes.events')
  </div>
@endsection
