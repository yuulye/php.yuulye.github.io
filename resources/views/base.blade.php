<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="{{asset('/img/logo.png')}}">
    <title>
      @hasSection ('title')
        {{ config('app.name') }} - @yield('title')
      @else
        {{ config('app.name') }}
      @endif
    </title>
    <meta charset="utf-8"/>
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset(
      '/tp/font-awesome-4.7.0/css/font-awesome.css')}}">
    <style>
      body {
        font-family: monospace;
        margin: 0;
        padding: 0;
      }
      pre {
        font-size: 10px;
      }
      @media (min-width: 576px)   {
        body {
          font-size: 16px;
        }
      }
    </style>
    @yield('head')
  </head>
  <body>
    @yield ('content')
    <script src="/tp/jquery-3.4.1.js"></script>
    @yield ('body')
    @include ('google_analytics')
  </body>
</html>
