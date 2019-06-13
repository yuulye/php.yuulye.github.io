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

  <div align="center">
    <br/>
    <br/>
      &copy;
      {{
        config('app.name')
        . ". 2017 - " . date('Y')
      }}.
    <br/>
    <br/>
    <br/>
  </div>

  @include ('index.hidden')
@endsection
