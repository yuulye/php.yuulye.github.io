@extends('base')

@section('content')
  <div style="padding: 8px;">
    <p>
      <a href="{{url('/game/t')}}"><h1>Project T</h1></a>
    </p>
    <dl>
    @foreach ($posts as $post)
      <dt>
        <code>{{ $post->date->format('Y M d') }}</code>
        &middot;
        <strong>{{ $post->data->title }}</strong>
      </dt>
      <dd>
        {{ $post->data->excerpt }}
        <a href="{{ url('/post/'.$post->path) }}">more...</a>
      </dd>
    @endforeach
    </dl>
    @include('disqus')
  </div>
  <a href="{{url('/song/unintended')}}"></a>
  <a href="{{url('/cv')}}"></a>
  <a href="{{url('/research/change_color')}}"></a>
  <a href="{{url('/research/japanese_name')}}"></a>
  <a href="{{url('/research/tahsin')}}"></a>
  <a href="{{url('/research/wudu')}}"></a>
  <a href="{{url('/research/wudu2')}}"></a>
  <a href="{{url('/research/tarawih')}}"></a>
  <a href="{{url('/research/alala')}}"></a>
  <a href="{{url('/research/arabic_keyboard')}}"></a>
@endsection
