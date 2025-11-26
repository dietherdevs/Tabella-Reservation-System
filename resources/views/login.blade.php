<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Login - Tabella</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <main>
    <div class="login-container">
      <img src="{{ asset('images/logo.jpg') }}" class="logo-large" alt="Tabella Logo">
      
      <h2>Welcome Back!</h2>
      <p>Your table awaits as always.</p>
      <hr class="divider">

      <form id="login-form" class="form-card" action="/login" method="POST">
        @csrf
        
        <label>Email Address</label>
        <input name="email" type="email" placeholder="Type your email" required>

        <label>Password</label>
        <input name="password" type="password" placeholder="Type your password" required>

        <div class="form-actions">
          <button class="action-btn" type="submit">Log In</button>
        </div>

        <p class="or-text">or</p>
        <button type="button" class="signup-btn" id="go-signup" onclick="window.location.href='/signup'">Sign up</button>
      </form>
      <hr class="divider">
    </div>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>