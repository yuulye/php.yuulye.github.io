<div class="header">
  <b>A Piece of Code</b>
  &middot;
  <a href="{{ url($code->link) }}"
    >output</a>
  &middot;
  <a href="{{ url('/codes') }}">
    codes
  </a>
</div>
<div class="editor">
  {!! $code->content !!}
</div>
