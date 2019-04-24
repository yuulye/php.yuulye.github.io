@extends('print')

@section('content')
@for ($i = 0; $i < 10; $i++)
<div class="page">
  @include('research.wudu.1')
</div>
@endfor
@endsection
