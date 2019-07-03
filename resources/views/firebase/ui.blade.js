var ui = new firebaseui.auth.AuthUI(firebase.auth());
var uiConfig = {
  signInOptions: [
    {
      provider:
        firebase.auth
          .EmailAuthProvider.PROVIDER_ID,
      signInMethod:
        firebase.auth
          .EmailAuthProvider.EMAIL_LINK_SIGN_IN_METHOD
    }
  ],
  callbacks: {
    signInSuccessWithAuthResult: function(
      authResult, redirectUrl
    ) {
      initApp();
      return false;
    },
    uiShown: function() {
      document.getElementById('loader')
        .style.display = 'none';
    }
  },
};
function signIn() {
  ui.start('#firebaseui-auth-container', uiConfig);
};

