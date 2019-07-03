@extends ('base')

@section ('head')

<style>
@include ('r.login_firebase.style')
</style>

@include ('firebase')
<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-auth.js"></script>

<script type="text/javascript">
@include ('r.login_firebase.script')
</script>
@endsection

@section ('content')
@include ('r.login_firebase.content')
@endsection
