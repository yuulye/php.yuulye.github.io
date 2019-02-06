@extends('base')

@section('head')
<style>
  div.nav {
    position: fixed;
    bottom: 0;
    width: 100%;
    background: white;
    border-top: 1px solid black;
    padding: 4px;
  }
  .content {
    padding-bottom: 32px;
  }
</style>
@endsection

@section('content')
  <div class="content">
    @yield('_content')
  </div>
  <div class="nav">
    <a href="{{url('/')}}">
      <i class="fa fa-home"></i>
    </a>
    {{$post->date}} &middot; {{$post->data->title}}
  </div>
@endsection
