@extends('print')

@section('head')
  @parent

  <style>
    table {
      width: 100%;
      height: 100%;
    }
    table tr td {
      width: 50%;
      vertical-align: top;
      padding: 8px;
    }
    table tr td.side1 {
      border-right: 1px solid black;
    }
    table tr td.side2 {
      border-left: 1px solid black;
    }
    h2 {
      font-size: 1.25em;
      border-bottom: 1px solid black;
      border-top: 1px solid black;
      margin-top: 4px;
      margin-bottom: 4px;
      padding-top: 4px;
      padding-bottom: 4px;
    }
    h2.top {
      border-top: none;
      margin-top: -8px;
    }
    h3 {
      position: absolute;
    }
    hr {
      margin: 1px;
    }
    pre {
      margin: 0px;
    }
  </style>
@endsection

@section('content')
<div class="page landscape">
  @include('research.alala.1')
</div>
<div class="page landscape">
  @include('research.alala.2')
</div>
<div class="page landscape last">
  @include('research.alala.3')
</div>
@endsection
