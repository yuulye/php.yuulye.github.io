@extends ('base')

@section ('head')
  <style>
    body {
      font-family: sans-serif;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: serif;
    }

    #nav {
      font-size: 32px;
      text-align: center;
    }
    #nav a {
      display: inline-block;
      text-decoration: none;
      padding: 8px;
    }

    @media (min-width: 576px)   {}
    @media (min-width: 768px)   {}
    @media (min-width: 992px)   {}
    @media (min-width: 1200px)  {}
  </style>
@endsection

@section ('content')
  <dl>
    @include ('index.post.tictactoe_ai')
    @foreach ($posts as $post)
      @include ('index.post')
    @endforeach
  </dl>
  @if (!@$_GET['debug'])
    <div id="comment" style="padding: 16px;">
      @include('disqus')
    </div>
  @endif
  @include ('index.hidden')

  @include ('index.hr')
  <br/>
  <br/>
  <br/>
  <div id="nav">
    <a href="#comment">
      <i class="fa fa-comment"></i>
    </a>
    <a href="#comment">
      <i class="fa fa-twitter"></i>
    </a>
    <a href="#comment">
      <i class="fa fa-facebook"></i>
    </a>
    <a href="#comment">
      <i class="fa fa-wordpress"></i>
    </a>
    <a href="#comment">
      <i class="fa fa-youtube"></i>
    </a>
    <a href="#comment">
      <i class="fa fa-instagram"></i>
    </a>
    <a href="#comment">
      <i class="fa fa-amazon"></i>
    </a>
    <a href="#comment">
      <i class="fa fa-android"></i>
    </a>
  </div>
  <div style="height: 256px;">
    <table style="width: 100%; height: 100%">
      <tr>
        <td align="center">
          <i>~</i>
        </td>
      </tr>
    </table>
  </div>
  <div align="center" style="padding: 8px;">
    <code>
      &copy; {{ config('app.name') . ". " . date('Y') }}.
    </code>
  </div>
  <br/>
@endsection
