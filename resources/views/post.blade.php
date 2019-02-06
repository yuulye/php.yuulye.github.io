@extends('base')

@section('head')
<style>
  div.nav {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: white;
    border-top: 1px solid black;
    padding: 4px;
  }
  ._content {
    padding: 8px;
    padding-bottom: 64px;
  }

  .footer {
    border-top: 1px solid silver;
    margin-top: 32px;
    padding-top: 16px;
    padding-bottom: 16px;
    font-size: 12px;
    word-break: break-all;
  }

  .quote {
    font-weight: 200;
  }
  .quote:before {
    display: block;
    height: 0;
    content: "“";
    margin-left: -.95em;
    font: italic 400%/1 "Times New Roman", serif;
    color: #999;
  }

  a.nostyle {
    text-decoration: none;
  }
</style>
@endsection

@section('content')
  <div class="_content">
    @yield('_content')
  </div>
  <div class="nav">
    <a href="{{url('/')}}" class="nostyle">
      &nbsp;&nbsp;
      <i class="fa fa-home"></i>
      &nbsp;&nbsp;
    </a>
    {{$post->date->format('m/d \'y')}} &middot; {{$post->data->title}}
  </div>
@endsection
