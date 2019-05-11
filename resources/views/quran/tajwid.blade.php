@extends('app')

@section('head')
@parent
<style>
@include('quran.tajwid.style')
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
<div dir="rtl" class="arabic">
تجويد
<hr/>
فَاِذَا قَرَأْتَ ٱلْقُرْءَانَ فَٱسْتَعِذْ بِٱللَّهِ مِنَ ٱلشَّيْطَـٰنِ ٱلرَّجِيمِ ﴿١٦:٩٨ سورة النحل﴾
<br/>
<a href="http://www.allaah.org/taawwuz/">تَعَوُذ</a>
--
أَعُوْذُ بِاللّٰهِ مِنَ الشَّيْطَانِ الرَّجِيْمِ
</div>
@include('quran.tajwid.makharij')
@endsection

@section('body')
<script>
@include('research.ak.script', ['notKeyboard' => true])
@include('quran.tajwid.script')
</script>
@endsection
