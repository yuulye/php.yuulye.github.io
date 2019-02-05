@extends('base')

@section('content')
  <h1>Hi!</h1>
  <dl>
  @foreach ($posts as $post)
    <dt>
      <code>{{ $post->date }}</code>
      &middot;
      <strong>{{ $post->data->title }}</strong>
    </dt>
    <dd>
      {{ $post->data->excerpt }}
      <a href="{{ url('/post/'.$post->path) }}">
        more...
      </a>
    </dd>
  @endforeach
  </dl>
@endsection
