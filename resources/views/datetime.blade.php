<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Date & Time - Tabella</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <header class="global-header">
    <div class="header-left"><a class="header-link" href="/reservation">Back to Form</a></div>
    <div class="header-center"><img src="{{ asset('images/logo.jpg') }}" alt="Tabella logo"></div>
    <div class="header-right"><a class="header-link" href="/menu">Menu</a></div>
  </header>

  <main class="container">
    <h1>Date & Time</h1>
    <p class="center">Pick the Perfect Moment to Dine with Us</p>

    <form id="datetime-form" class="form-card" action="/payment" method="GET"> 
      <label>Select Date</label>
      <input type="date" name="date" required />

      <label style="margin-block-start:12px">Select Time</label>
      <select name="time" required>
        <option value="09:00">09:00 am</option>
        <option value="11:00">11:00 am</option>
        <option value="13:00">1:00 pm</option>
        <option value="15:00">3:00 pm</option>
        <option value="17:00">5:00 pm</option>
        <option value="18:00">6:00 pm</option>
        <option value="19:00">7:00 pm</option>
      </select>

      <div class="form-actions">
        <a class="small-link" href="/reservation">Back to Form</a>
        <button class="action-btn" type="submit">Next</button>
      </div>
    </form>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>