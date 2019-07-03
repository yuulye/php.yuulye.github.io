@include ('r.login_firebase.script.buttons')

function initApp() {
  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      signedInUser.innerHTML = user.email;
      if (!user.emailVerified) {
        firebaseButtonEmailVerification
          .style.display = "inline";
      }
      signedInUserWrapper.style.display = "block";
      firebaseLoginFormWrapper.style.display = "none";
    } else {
      signedInUserWrapper.style.display = "none";
      firebaseLoginFormWrapper.style.display = "block";
    }
    loader.style.display = "none";
  });

  firebaseButtonSignIn.addEventListener(
    'click', toggleSignIn, false
  );
  firebaseButtonSignOut.addEventListener(
    'click', signOut, false
  );
  document.getElementById(
    'quickstart-sign-up'
  ).addEventListener('click', handleSignUp, false);
  firebaseButtonEmailVerification.addEventListener(
    'click', sendEmailVerification, false
  );
  document.getElementById(
    'quickstart-password-reset'
  ).addEventListener('click', sendPasswordReset, false);
}

function firebaseLoginFormSubmit() {
  return false;
}

window.onload = function() {
  initApp();
};
