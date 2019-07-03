<div id="loader">loading... please wait</div>
<div id="firebaseLoginFormWrapper">
  <form
		id="firebaseLoginForm"
		onsubmit="return firebaseLoginFormSubmit()"
	>
		<div>
			<input
				autofocus
				type="text"
				id="email"
				name="email" placeholder="Email"/>
			<br/>
			<input
				type="password"
				id="password"
				name="password" placeholder="Password"/>
		</div>

		<div style="text-align: center;">
			<button id="firebaseButtonSignIn">
				Sign In
			</button>
			<button
				id="quickstart-sign-up"
				name="signup">Sign Up</button>
			<button
				id="quickstart-password-reset"
			>Password Reset</button>
		</div>

  </form>
</div>

<div style="display: none;" id="signedInUserWrapper">
	<span id="signedInUser"></span>
	<button
		style="display: none;"
		id="firebaseButtonEmailVerification"
	>Email Verification</button>
	<button
		id="firebaseButtonSignOut"
	>Sign Out</button>
</div>
