@extends('base')

@section ('title', $post->data->title)

@section ('head')
<style>@include ('post.style')</style>
@endsection

@section ('content')
  <div class="header">
    <br/>
    <a href="{{url('/')}}">Home</a>
    &middot;
    <a href="#comment">Comment</a>
    |
    {{$post->date->format('m/d \'y')}}
    &middot;
    {{$post->data->title}}
  </div>

  <hr/>

  <div class="content">
    @yield ('_content')
  </div>

  <hr/>

  <div class="comments" id="comment">
    <br/>
    @include('disqus')
    <br/>
    <br/>
  </div>

  <hr/>

  @include ('index.footer')
@endsection
