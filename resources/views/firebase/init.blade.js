initApp = function() {
  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      var displayName = user.displayName;
      var email = user.email;
      var emailVerified = user.emailVerified;
      var photoURL = user.photoURL;
      var uid = user.uid;
      var phoneNumber = user.phoneNumber;
      var providerData = user.providerData;
      user.getIdToken().then(function(accessToken) {
          document.getElementById('sign-in')
            .textContent = 'Sign out';
          document.getElementById('account-details')
            .textContent = JSON.stringify({
              displayName: displayName,
              email: email,
              emailVerified: emailVerified,
              phoneNumber: phoneNumber,
              photoURL: photoURL,
              uid: uid,
              accessToken: accessToken,
              providerData: providerData
            }, null, '  ');
      });
    } else {
      document.getElementById('sign-in')
        .textContent = 'Sign in';
      document.getElementById('account-details')
        .textContent = '';
      document.getElementById('loader')
        .style.display = 'block';
    }
  }, function(error) {
      console.log(error);
  });
};
