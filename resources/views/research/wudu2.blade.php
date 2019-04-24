@extends('print')

@section('head')
  @parent

  <style>
    table {
      width: 100%;
    }
    table tr td {
      width: 50%;
      vertical-align: top;
      padding: 8px;
    }
    table tr td.bordered {
      border-right: 1px solid rgba(0, 0, 0, .7);
    }

    table.inline {
      display: block;
    }

    table.inline > tr > td {
      display: inline-block;
    }
  </style>
@endsection

@section('content')
<div class="page">
  @include('research.wudu.1_1')
</div>
@endsection
