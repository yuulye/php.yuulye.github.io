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
    <td>
      <textarea
        dir="rtl"
        class="arabic output"
        id="arabicOutput"></textarea>
    </td>
  </tr>
  <tr>
    <td style="height: 50%;"><div id="map"></div></td>
    <td>
      <textarea
        id="romOutput"
        ></textarea>
    </td>
  </tr>
</table>
<textarea>

!lHmZ+
!lH!~

!leyn
!lh!~

!lgyn
!lv!~

|qSY
wsT
|dnY

!lmdy+

!l|lf
!lw!w
!ly!~

!lvayCuwm
!lC&afata!n
!llisa!n
!lhalq
!ljawf

mava!rij !lhuruwf
!aw` Zid` ealay`Hi warat&ili Ll`qur~a!na tar`tiylA! {73:4 swr+ !lmZml}
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
