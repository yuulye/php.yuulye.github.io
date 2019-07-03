@extends ('base')

@section ('head')
<style>
@include ('r.login_firebase.style')
</style>
@include ('firebase')
<script src="{{
  'https://www.gstatic.com/firebasejs/'
  .'6.2.4'
  .'/firebase-auth.js'
}}"></script>
@endsection

@section ('content')
@include ('r.login_firebase.content')
@endsection

@section ('body')
<script>
@include ('r.login_firebase.script')
</script>
@endsection

