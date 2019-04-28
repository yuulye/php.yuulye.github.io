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
  </style>
@endsection

@section('content')
<div class="page landscape">
  @include('research.alala.1')
</div>
<div class="page landscape last">
  @include('research.alala.2')
</div>
