@include ('r.login_firebase.script.buttons')

function initApp() {
  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      if (user.displayName) {
        signedInUser.value = user.displayName;
      } else {
        signedInUser.value = user.email;
      }
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

  /* events */

  firebaseButtonSubmitDisplayName.onclick = e => {
    if (signedInUser.value.length < 3) {
      alert('Display name is too short!');
      return;
    }

    var user = firebase.auth().currentUser;
    user.updateProfile({
      displayName: signedInUser.value
    }).then( () => {
      e.target.style.display = 'none';
      firebaseButtonChangeDisplayName
        .style.display = 'inline';
      signedInUser.disabled = true;
    }).catch( error => {
      console.error(error);
    });
  };

  firebaseButtonChangeDisplayName.onclick = e => {
    e.target.style.display = 'none';
    firebaseButtonSubmitDisplayName
      .style.display = 'inline';
    signedInUser.disabled = false;
    signedInUser.focus();
  };

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
