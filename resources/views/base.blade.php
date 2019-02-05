<!DOCTYPE html>
<html>
  <head>
    <title>{{ config('app.name') }}</title>
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset(
      '/tp/font-awesome-4.7.0/css/font-awesome.css')}}">
    @yield('head')
  </head>
  <body>
    @yield('content')
    @yield('body')
  </body>
</html>
