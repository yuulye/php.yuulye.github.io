@php
  $socials = [
    [
      "GitHub",
      "https://github.com/yuulye",
    ],
    [
      "SoloLearn",
      "https://www.sololearn.com/Profile/14417238",
    ],
    [
      "DEV Community",
      "https://dev.to/yuulye",
    ],
    [
      "Twitter",
      "https://twitter.com/lyeyuu",
    ],
    [
      "Facebook",
      "https://www.facebook.com/yuulye",
    ],
  ];
@endphp
<div class="social" align="center">
  <br/>
  @foreach ($socials as $s)
    <a href="{{ $s[1] }}">{{ $s[0] }}</a>
    @if (!$loop->last)
      <br/>
      &middot;
      <br/>
    @endif
  @endforeach
  <br/>
  <br/>
</div>

<hr/>

<div align="center" class="footer">
  <br/>
  <br/>
    <a href="/">
    &copy;{{
      config('app.name')
      . " 2017 - " . date('Y')
    }}
    </a>
  <br/>
  <br/>
  <br/>
</div>
