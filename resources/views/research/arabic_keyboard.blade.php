@extends('base')

@section('head')
<style>
@include('research.ak.style')
</style>
@endsection

@section('content')

<table>
  <tr>
    <td style="width: 40%;height: 50%;">
      <textarea
        id="arabicInput"
        autofocus></textarea>
    </td>
    <td rowspan="2">
      <textarea
        dir="rtl"
        class="arabic output"
        id="arabicOutput"></textarea>
    </td>
  </tr>
  <tr>
    <td style="height: 50%;"><div id="map"></div></td>
  </tr>
</table>
<textarea>
fa!iza! qara|`ta Ll`qur`~a!na faLs`taeiz` biLll&aHi mina LlC&ay`Ta_^ni Llr&ajiymi {16:98 swr+ !lnhl}
bis`mi !ll&^Hi !lroh`m^ni !lr&ohiy`mi {1}
!al`ham`du lil&^Hi rob&i !l`e^lamiy`na @ {2}
!aw` Zid` ealay`Hi warot&ili !l`qur`~a!na tar`tiy`lA! {4:73}
---
taeawuz
---
|aeuw`zu bi!ll&^Hi mina !lC&ay`Ta!ni !lr&ajiy`mi
</textarea>
@include('research.ak.script.template')
@endsection

@section('body')
<script>
@include('research.ak.script')
</script>
@endsection
