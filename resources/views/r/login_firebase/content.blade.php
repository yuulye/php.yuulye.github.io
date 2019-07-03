<div>
  <input
    type="text"
    id="email"
    name="email" placeholder="Email"/>
  <input
    type="password"
    id="password"
    name="password" placeholder="Password"/>
</div>

<div>
  <button
    disabled id="quickstart-sign-in"
    name="signin">Sign In</button>
  <button
    id="quickstart-sign-up"
    name="signup">Sign Up</button>
  <button
    disabled id="quickstart-verify-email"
    name="verify-email"
  >Email Verification</button>
  <button
    id="quickstart-password-reset"
    name="verify-email"
  >Password Reset</button>
</div>

<hr/>

<div>
  sign-in status:
  <span id="quickstart-sign-in-status"
    >Unknown</span>
  <div>
    auth
    <code>currentUser</code>
    object value:
  </div>
  <pre><code
    id="quickstart-account-details"
  >null</code></pre>
</div>
