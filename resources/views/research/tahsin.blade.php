@extends('arabic')

@section('head')
<style>@include('tahsin.style')</style>
@endsection

@section('content')
<div class="page">
  <table border="1">
    <tr>
      <td>اَنِئًا</td>
      <td>مَئِيْئًا</td>
      <td>الْمُؤْنِ</td>
      <td>مِنَ</td>
      <td>اَ أْ نَ</td>
      <td>اَ نِ</td>
      <td>اُ وْ اَ نْ</td>
      <td>اَ اِ اُ بَأْ</td>
    </tr>
  </table>
  <div dir="rtl">
    <span class="arabic" dir="rtl" lang="ar">
    </span>
  </div>
</div>
@endsection

@section('body')
<script>@include('tahsin.script')</script>
@endsection
