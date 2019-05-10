@extends('app')

@section('head')
@parent
<style>
table {
  width: 100%;
}
table tr td {
  width: 33%;
}

.arabic {
  font-size: 24px;
  padding: 0px;
}
.changeThis {
  width: 6.66666%;
  text-align: center;
}
</style>
@endsection

@php
$placeHolder = "#";
$letters = [
  [
    "!",
    $placeHolder,
    "H",
    $placeHolder,
    "b",
  ],
  [
    "v",
    $placeHolder,
    "e",
    $placeHolder,
    "h",
  ],
  [
    "m",
    $placeHolder,
    "b",
    $placeHolder,
    "g",
  ],
  [
    "q",
    $placeHolder,
    "f",
    $placeHolder,
    "w",
  ],
  [
    "C",
    $placeHolder,
    "j",
    $placeHolder,
    "k",
  ],
  [
    "l",
    $placeHolder,
    "D",
    $placeHolder,
    "y",
  ],
  [
    "T",
    $placeHolder,
    "r",
    $placeHolder,
    "n",
  ],
  [
    "x",
    $placeHolder,
    "t",
    $placeHolder,
    "d",
  ],
  [
    "S",
    $placeHolder,
    "c",
    $placeHolder,
    "z",
  ],
  [
    "H",
    $placeHolder,
    "s",
    $placeHolder,
    "Z",
  ],
];
$pattern = [
  "ba".$placeHolder."`",
  $placeHolder."a",
  $placeHolder."i",
  $placeHolder."u",
]
@endphp

@section('content')
<div class="arabic">
تَعَوُذ
--
أَعُوْذُ بِاللّٰهِ مِنَ الشَّيْطَانِ الرَّجِيْمِ
<br/>
بِسْمِ اللّٰهِ الرَحْمٰنِ الرَّحِيْمِ
</div>
<hr/>
<div style="padding: 0 4px;">
  <table>
    @foreach ($letters as $line)
      <tr>
        @foreach ($line as $letter)
          @if ($letter == $placeHolder)
            <td class="changeThis"></td>
          @else
            @for ($i = 3;$i >= 0;$i--)
              <td class="arabic changeThis">{{
                str_replace($placeHolder, $letter, $pattern[$i])
              }}</td>
            @endfor
          @endif
        @endforeach
      </tr>
    @endforeach
  </table>
</div>
@endsection

@section('body')
<script>
@include('research.ak.script', ['notKeyboard' => true])
var els = document.getElementsByClassName("changeThis");
for (var i = 0;i < els.length;i++) {
  var el = els[i];
  el.innerText = translate(el.innerText);
}
</script>
@endsection
