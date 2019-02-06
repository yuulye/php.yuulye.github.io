@extends('base')

@section('content')
  <div style="padding: 8px;">
    <h1>Hi!</h1>
    <dl>
    @foreach ($posts as $post)
      <dt>
        <code>{{ $post->date->format('Y M d') }}</code>
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
  </div>
@endsection
