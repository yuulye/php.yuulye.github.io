@extends('base')

@section('content')
<style>
@include('game.tic-tac-toe.style')
</style>

<table class="wrapper">
  <tr>
    <td>
      @include('game.tic-tac-toe.menu')
      @include('game.tic-tac-toe.board')
    </td>
  </tr>
</table>

<script>
@include('game.tic-tac-toe.script');
</script>
@endsection
