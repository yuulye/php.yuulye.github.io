@extends ('base')

{{-- ~ --}}

@section ('content')
  <div class="posts">
    @foreach ($posts as $post)
      @include ('index.post')
    @endforeach
  </div>

  <div class="comments">
    <br/>
    @include ('disqus')
    <br/>
    <br/>
  </div>

  @include ('index.footer')
@endsection
