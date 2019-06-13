@extends ('base')

@section ('head')
  <style>@include ('index.style')</style>
@endsection

@section ('content')
  <div class="posts">
    @include ('index.post.tictactoe_ai')
    @foreach ($posts as $post)
      @include ('index.post')
    @endforeach
  </div>

  <div class="comments">
    <br/>
    @include('disqus')
    <br/>
    <br/>
  </div>

  <hr/>

  @include ('index.footer')

  @include ('index.hidden')
@endsection
