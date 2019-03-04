@extends('base')

@section('content')
<h1>Japanese Name</h1>
<hr>
<input type="text" id="inputName">
<button id="execute">To Japanese</button>
<h2 id="japan"></h2>
@endsection

@section('body')
<script>
@include('research.japanese_name.script')
</script>
@endsection
