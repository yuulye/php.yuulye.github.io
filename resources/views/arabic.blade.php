<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="{{asset('/img/logo.png')}}">
    <title>{{ config('app.name') }}</title>
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset(
      '/tp/font-awesome-4.7.0/css/font-awesome.css')}}">
    <style>
      body {
        margin: 0;
        padding: 0;
      }
    </style>
    @yield('head')
  </head>
  <body>
    @yield('content')
    @yield('body')
  </body>
</html>
