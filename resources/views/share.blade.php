@extends('app')

@section('head')
@parent
<style>
body {
  padding-bottom: 64px;
}
#footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  text-align: center;
  border-top: 1px solid grey;
  background: white;
  padding: 8px;
}
</style>
@endsection

@section('content')
@yield('_content')
<hr/>
@include('disqus')
<div id="footer">
<a href="/">
<i class="fa fa-home"></i>
yuulye.github.io
</a>
</div>
@endsection
