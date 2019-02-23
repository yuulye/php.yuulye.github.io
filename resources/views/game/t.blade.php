@extends('base')

@section('head')
<style>@include('game.t.style')</style>
@endsection

@section('content')
@php
$row = $col = 3;
@endphp
<a href="{{url('/')}}">
  <i class="fa fa-home"></i> Back
</a>
<br/>
<table id="board">
  @for ($i = 0; $i < $row; $i++)
    <tr>
      @for($j = 0; $j < $col; $j++)
        <td></td>
      @endfor
    </tr>
  @endfor
</table>
@include('game.t.extra')
@endsection

@section('body')
<script>@include('game.t.script');</script>
@endsection
