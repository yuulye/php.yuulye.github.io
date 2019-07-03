@extends ('base')

@section ('head')
<script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
@endsection

@section ('content')
<h1>Firebase</h1>
@endsection

@section ('body')
<button id="sign-in">Sign In</button>
<pre id="account-details"></pre>
<hr/>
<div id="firebaseui-auth-container"></div>
<div id="loader">Loading...</div>

@include ('firebase')
<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-auth.js"></script>

<script>
window.onload = () => {
  @include ('firebase.init')
  @include ('firebase.ui')

  document.getElementById('sign-in')
    .onclick = () => {
      if (firebase.auth().currentUser) {
        firebase.auth().signOut();
      } else {
        signIn();
        ui.start('#firebaseui-auth-container', uiConfig);
      }
  };
};
</script>
@endsection
