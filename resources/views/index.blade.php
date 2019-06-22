@extends ('base')

@section ('head')
  <style>@include ('index.style')</style>
@endsection

@section ('content')
  <br/>

  <div class="quote" align="center">
    @include ('quotes.'.$quote)
    <br/>
  </div>

  <hr/>

  <div class="code" border="1">
    <br/>
    <b>A Piece of Code</b>
    &middot;
    <a href="{{ url($code->link) }}">output</a>
    <table border="1" width="100%">
      <tr>
        <td><pre border="1">{{ $code->content }}</pre></td>
      </tr>
    </table>
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
