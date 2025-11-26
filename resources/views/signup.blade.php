<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Sign Up - Tabella</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <main>
    <div style="max-inline-size:820px; margin:40px auto; text-align:center;">
      <img src="{{ asset('images/logo.jpg') }}" class="logo-small" alt="logo">
      <h2>Welcome to <span class="tabella">Tabella</span> your table is just a tap away!</h2>

      <h3 style="margin-block-start:18px;">Sign Up</h3>

      <form id="signup-form" class="form-card" style="max-inline-size:520px; margin:18px auto;" action="/signup" method="POST">
        @csrf <label>First Name</label>
        <input name="first" type="text" placeholder="Type your First name" required>

        <label>Last Name</label>
        <input name="last" type="text" placeholder="Type your Last name" required>

        <label>Email ID</label>
        <input name="email" type="email" placeholder="Type your email ID" required>

        <label>Password</label>
        <div class="password-container">
          <input name="password" id="password" type="password" placeholder="Password" required>
          <span class="toggle-password" onclick="togglePassword('password', this)">👁️</span>
        </div>

        <label>Re-enter Password</label>
        <div class="password-container">
          <input name="confirm-password" id="confirm-password" type="password" placeholder="Re-enter Password" required>
          <span class="toggle-password" onclick="togglePassword('confirm-password', this)">👁️</span>
        </div>

        <label>Phone Number</label>
        <input name="phone" type="text" placeholder="Type your Phone Number" required>

        <div style="text-align:start; margin-block-start:12px;">
          <label><input type="checkbox" required/> I agree to all the Terms and Conditions</label>
        </div>

        <div class="form-actions">
          <button type="submit" class="action-btn">Sign Up</button>
        </div>

        <p style="margin-block-start:10px;">Already have an account? <a href="/login">Log In</a></p>
      </form>

    </div>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>