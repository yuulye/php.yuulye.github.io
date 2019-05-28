@extends('share')

@section('head')
@parent
<style>
.wrapper {
  padding-top: 32px;
  text-align: center;
}
.house {
  font-size: 128px;
  display: inline-block;
}
.house {
  transform: rotate(62deg) scale(0.75) skew(45deg) translate(-85px);
}
</style>
@endsection

@section('_content')
<div class="wrapper">
  <div class="house">
  <i class="fa fa-home"></i>
  </div>
</div>
@endsection
