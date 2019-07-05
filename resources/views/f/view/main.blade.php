
<div style="display: none;" id="signedInUserWrapper">
  <div>
    <input
      disabled type="text" id="signedInUser"
      size="12"
    />
    <button
      id="firebaseButtonChangeDisplayName"
    >Change</button>
    <button
      style="display: none;"
      id="firebaseButtonSubmitDisplayName"
    >Submit&nbsp;</button>
    <button
      style="display: none;"
      id="firebaseButtonEmailVerification"
    >Email Verification</button>
    <button
      id="firebaseButtonSignOut"
    >Sign Out</button>
  </div>

  <hr/>

  @include ('f.view.tictactoe')
</div>

