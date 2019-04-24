@extends('print')

@section('head')
  @parent

  <style>
    table {
      border: 1px solid rgba(0, 0, 0, .7);
      border-left: 0px;
      border-right: 0px;
    }
    table tr td {
      width: 50%;
      vertical-align: top;
      padding: 8px;
    }
    table tr td.bordered {
      border-right: 1px solid rgba(0, 0, 0, .7);
    }
  </style>
@endsection

@section('content')
<div class="page">
  @include('research.wudu.1')
</div>
@endsection
