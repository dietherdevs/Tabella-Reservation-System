<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Summary - Tabella</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <style>
    /* Styling for the QR Code Section */
    #qr-section {
      display: none; /* Hidden by default */
      margin-top: 20px;
      padding: 20px;
      background: #fff;
      border: 2px dashed var(--maroon);
      border-radius: 12px;
      text-align: center;
    }
    #qr-image {
      width: 180px;
      height: 180px;
      margin: 10px auto;
      display: block;
    }
    .qr-instruction {
      font-size: 14px;
      color: #555;
      margin-bottom: 10px;
    }
    .transaction-ref {
      font-family: monospace;
      font-weight: bold;
      color: var(--black);
      background: #eee;
      padding: 4px 8px;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <header class="global-header">
    <div class="header-left"><a class="header-link" href="/reservation">Back to Reservation</a></div>
    <div class="header-center"><img src="{{ asset('images/logo.jpg') }}" alt="Tabella logo"></div>
    <div class="header-right"><a class="header-link" href="/menu">Menu</a></div>
  </header>

  <main class="container">
    <div class="summary-box center">
      <h2>Order Summary</h2>
      
      <p><strong>Bundle:</strong> <span id="summary-bundle">—</span></p>
      <p><strong>Date:</strong> <span id="summary-date">—</span></p>
      <p><strong>Time:</strong> <span id="summary-time">—</span></p>
      <p><strong>Number of Guests:</strong> <span id="summary-guests">—</span></p>
      <p><strong>Payment Method:</strong> <span id="summary-payment">—</span></p>
      
      <p><strong>Booked under:</strong> 
        <span id="summary-name" style="color: var(--maroon); font-weight: bold;">
            {{ auth()->user() ? auth()->user()->first_name . ' ' . auth()->user()->last_name : 'Guest' }}
        </span>
      </p>

      <div id="qr-section">
        <h3>Scan to Pay</h3>
        <p class="qr-instruction">Please scan this QR code using your <span id="qr-method-name">banking app</span> to complete the payment.</p>
        
        <img id="qr-image" src="" alt="Payment QR Code">
        
        <p class="qr-instruction">Transaction Reference: <span id="qr-ref" class="transaction-ref">Generating...</span></p>
      </div>

      <form id="final-submit-form" action="/confirm-reservation" method="POST">
        @csrf 
        <input type="hidden" name="bundle" id="input-bundle">
        <input type="hidden" name="date" id="input-date">
        <input type="hidden" name="time" id="input-time">
        <input type="hidden" name="guests" id="input-guests">
        <input type="hidden" name="preference" id="input-preference">
        <input type="hidden" name="payment" id="input-payment">
        <input type="hidden" name="notes" id="input-notes">

        <div style="margin-block-start:18px; text-align:start;">
          <label>
            <input type="checkbox" required /> I hereby give Tabella Restaurant permission to process my booking details.
          </label>
        </div>

        <div style="margin-block-start:18px;">
          <button type="submit" id="confirm-order" class="action-btn">Confirm</button>
        </div>
      </form>

    </div>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>