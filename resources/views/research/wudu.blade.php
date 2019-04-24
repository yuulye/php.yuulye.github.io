@extends('print')

@section('head')
  @parent

  <style>
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
@for ($i = 0; $i < 10; $i++)
<div class="page">
  @include('research.wudu.1')
</div>
@endfor
@endsection
