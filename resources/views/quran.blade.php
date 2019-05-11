@extends('base')

@section('content')
<h1>Quran</h1>
<h2>
  <a href="{{ url('/quran/tajwid') }}">Tajwid</a>
</h2>
<h2>
  <a href="{{ url('/quran/read') }}">Read</a>
</h2>
@endsection
