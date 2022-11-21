<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <title>Renewable Energy Consumption</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  </head>

  <body>
      @include('frontend.layouts.header')
      
      @include('frontend.layouts.navbar')

      @yield('content')
  </body>

</html>
