@extends('base')

@section('head')
<style>
@include('research.change_color.style')
</style>
@endsection

@section('content')
<h1>Research Change Color</h1>
<hr/>
<input id="from" type="color" value="#ff0000" />
<input id="to" type="color" value="#ffee00" />
<input id="time" type="text" value="15" />
<button id="apply">apply</button>
<br/><br/>
<div id="wrapper"></div>
@endsection

@section('body')
<script>
@include('research.change_color.script')
</script>
@endsection
