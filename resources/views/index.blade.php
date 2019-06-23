@extends ('base')

@section ('head')
  <style>@include ('index.style')</style>
@endsection

@section ('content')
  <br/>

  <div class="quote" align="right">
    @include ('quotes.'.$quote)
    <br/>
  </div>

  <hr/>

  <br/>

  <div class="codeWrapper">
    <div class="header">
      <b>A Piece of Code</b>
      &middot;
      <a href="{{ url($code->link) }}">
        output
      </a>
    </div>
    <div class="editor">
      {!! $code->content !!}
    </div>
  </div>

  <hr/>

  <div class="posts">
    @include ('index.post.php')
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
