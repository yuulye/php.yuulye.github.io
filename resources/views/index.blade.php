@extends ('base')

@section ('head')
  <style>@include ('index.style')</style>
@endsection

@section ('content')
  <div class="header">
    @include ('index.header')
  </div>

  <hr/>

  <div class="codeWrapper">
    @include ('index.code')
  </div>

  <hr/>

  <div class="posts">
    @include ('index.post.php')
    @include ('index.post.tictactoe_ai')
    @foreach ($posts as $post)
      @include ('index.post')
    @endforeach
  </div>

  <div class="comments" id="comments">
    @include ('index.message')
  </div>

  <hr/>

  @include ('index.footer')

  @include ('index.hidden')
@endsection
