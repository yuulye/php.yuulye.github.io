@extends('base')

@section('content')
<div style="padding-top: 32px;"></div>
<div style="
  position: relative;
  border: 1px solid black;
  width: 128px;
  height: 64px;
">
  <div style="
    position: absolute;
    top: 8px;
    right: 8px;
    border: 1px solid red;
    width: 32px;
    height: 32px;
  "></div>
  <div style="
    position: fixed;
    bottom: 8px;
    left: 8px;
    border: 1px solid blue;
    width: 32px;
    height: 32px;
  "></div>
</div>

<br/>

<div style="
  border: 1px solid magenta;
  width: 128px;
  height: 64px;
">
  <div style="
    position: absolute;
    top: 8px;
    right: 8px;
    border: 1px solid green;
    width: 32px;
    height: 32px;
  "></div>
</div>
@endsection
