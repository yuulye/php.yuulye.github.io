@extends ('base')

@section ('head')
  <style>@include ('index.style')</style>
@endsection

@section ('content')
  <div class="header">
    <a href="#social">links</a>
    &middot;
    <a href="#message">message</a>
    &middot;
    <a href="#comments">comments</a>
    &middot;
    <b>{{ config('app.name') }}</b>
  </div>

  <div class="quote">
    @include ('quotes.'.$quote)
  </div>

  <hr/>

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

  <div class="message" id="message">
    <form action="mailto:yuulye@gmail.com">
      <b>Message</b>
      <label for="subject">Subject</label>
      <br/>
      <input
        id="subject"
        type="text"
        name="subject"
        value="[a:{{
          request()->path()
        }}] ChangeWithYourSubject"
      />
      <br/>
      <label for="from">From</label>
      <br/>
      <input
        id="from"
        type="text"
        name="from"
        value="changewith@youremail.com"
      />
      <br/>
      <label for="body">Body</label>
      <br/>
      <textarea id="body" name="body">{{
        "HiNiceSite"
      }}</textarea>
      <br/>
      <input type="submit" value="Send"/>
    </form>
  </div>

  <hr/>

  <div class="comments" id="comments">
    @include('disqus')
  </div>

  <hr/>

  @include ('index.footer')

  @include ('index.hidden')
@endsection
