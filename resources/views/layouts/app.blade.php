<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Basic App</title>
  {{-- Bootstrap --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

  @include('layouts.navbar')
  
  @if (Request::is('/'))
    @include('inc.showcase')
  @endif

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8 col-lg-8">
        @yield('content')
      </div>
      <div class="col-md-8 col-lg-4">
        @include('inc.sidebar')
      </div>
    </div>
  </div>

  <div id="footer" class="text-center mt-4 pb-1 bg-dark text-white">
    <p class="pt-3">&copy; Copyright 2020.</p>
  </div>

  

</body>
</html>