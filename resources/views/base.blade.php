<!DOCTYPE html>
<html>
  <head>
    <title>{{ config('app.name') }}</title>
    <style>
      html {
        background: black;
        font: white;
      }
    </style>
    @yield('head')
  </head>
  <body>
    @yield('content')
    @yield('body')
  </body>
</html>
