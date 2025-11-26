<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Payment - Tabella</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <header class="global-header">
    <div class="header-left"><a class="header-link" href="/datetime">Back to Date & Time</a></div>
    <div class="header-center"><img src="{{ asset('images/logo.jpg') }}" alt="Tabella logo"></div>
    <div class="header-right"><a class="header-link" href="/menu">Menu</a></div>
  </header>

  <main class="container">
    <h1 class="center">Payment Option</h1>
    <p class="center">How would you like to pay?</p>

    <form id="payment-form" class="form-card" action="/summary" method="GET">
      <label>
        <input type="radio" name="payment_method" value="PayPal" required /> PayPal
      </label>

      <label>
        <input type="radio" name="payment_method" value="Card" /> Credit Card/Debit Card
      </label>

      <label>
        <input type="radio" name="payment_method" value="Bank" /> Bank Transfer
      </label>

      <label>
        <input type="radio" name="payment_method" value="Counter" /> Over the counter
      </label>

      <div class="form-actions">
        <a class="small-link" href="/datetime">Back to Date & Time</a>
        <button class="action-btn" type="submit">Next</button>
      </div>
    </form>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>