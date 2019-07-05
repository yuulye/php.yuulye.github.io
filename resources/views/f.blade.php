@extends ('base')

@section ('head')
<style>
@include ('f.style')
</style>
<style>
@include ('r.login_firebase.style')
</style>
<style>
@include ('f.style.main')
</style>
@include ('firebase')
<script src="{{
  'https://www.gstatic.com/firebasejs/'
  .'6.2.4'
  .'/firebase-auth.js'
}}"></script>
<style>
@include ('f.style.tictactoe')
</style>
@endsection

@section ('content')
@include ('r.login_firebase.content')
@include ('f.view.main')
@endsection

@section ('body')
<script>
@include ('r.login_firebase.script')
window.onload = function() {
  initApp();
  @include ('f.script.tictactoe')
};
</script>
@endsection

