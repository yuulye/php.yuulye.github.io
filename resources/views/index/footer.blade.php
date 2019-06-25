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
<div class="social" id="social">
  @foreach ($socials as $s)
    <a href="{{ $s[1] }}">{{ $s[0] }}</a>
    @if (!$loop->last)
      &middot;
    @endif
  @endforeach
</div>

<hr/>

<div class="footer">
  &copy;<a href="/">{{
      config('app.name') }}</a>
  {{" 2017 - " . date('Y')}}
</div>
