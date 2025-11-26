<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Account Created - Tabella</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <main>
    <div style="max-inline-size:760px; margin:60px auto; text-align:center;">
      <img src="{{ asset('images/logo.jpg') }}" class="logo-small" alt="logo">
      <hr style="inline-size:70%; margin:18px auto; opacity:.5"/>
      <div style="background:var(--light-gray); padding:28px; border-radius:12px;">
        <div style="font-size:44px; color:green;">✅</div>
        <h2>You're All Set!</h2>
        <p>Congratulations, your account/reservation has been successfully created. You can now log in and start exploring everything we have to offer.</p>
      </div>

      <div style="margin-block-start:28px;">
        <a class="action-btn" href="/login">confirm</a>
      </div>
    </div>
  </main>
</body>
</html>