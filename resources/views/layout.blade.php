<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') HMI</title>
  <link rel="stylesheet" href="css/nav.css">
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/event.css">
  <script src="js/float-panel.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="{{ asset('js/jssor.slider-28.0.0.min.js') }}"></script>
  <link rel="stylesheet" href="css/slider.css">
  @yield('link')
</head>

<body>

  @include('partials.nav')

  @include('partials.slider')

  @yield('content')

  @include('partials.footer')
</body>

</html>
