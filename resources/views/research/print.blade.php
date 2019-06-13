@extends('base')

@section('head')
  @parent
  <style>
    .borderTest {
      width: 100%;
      height: 100%;
      border: 1px solid black;
    }
  </style>
@endsection

@section('content')
@for ($i=0; $i < 100; $i++)
<div class="page">
  <div class="borderTest"></div>
</div>
<br/>
@endfor
@endsection
