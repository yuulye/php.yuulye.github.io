@extends ('base')

{{-- ~ --}}

@section ('head')
  <style>@include ('index.style')</style>
@endsection

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

  <hr/>

  @include ('index.footer')
@endsection
