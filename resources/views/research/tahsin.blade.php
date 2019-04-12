@extends('arabic')

@section('head')
<style>@include('tahsin.style')</style>
<style>
  .text {
    font-family: serif;
    font-size: 24px;
    text-align: left;
  }
</style>
@endsection

@section('content')
<div class="page">
	@include('tahsin.idzhar')
	<br/>
	@include('tahsin.idghombi')
	<br/>
	@include('tahsin.idghombila')
	<br/>
	@include('tahsin.iqlab')
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	@include('tahsin.ikhfa')
	<!--
  <div dir="rtl">
    <span class="arabic" dir="rtl" lang="ar">
    </span>
  </div>
	-->
</div>
@endsection

@section('body')
<script>@include('tahsin.script')</script>
@endsection
