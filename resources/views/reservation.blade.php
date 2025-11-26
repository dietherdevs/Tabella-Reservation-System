<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Reservation - Tabella</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <style>
   
    @font-face {
      font-family: 'OldLondon';
      src: url('{{ asset('fonts/OldLondon.ttf') }}') format('truetype'); /* Adjust path as needed */
      font-weight: normal;
      font-style: normal;
    }

    body {
      background-color: #f8f8f8; 
    }

    .container {
      max-width: 800px; 
      margin: 40px auto;
      padding: 40px;
      background-color: #fff; 
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }

    h2.center {
      font-family: 'OldLondon', serif;
      font-size: 42px;
      margin-bottom: 5px;
      color: #2c1b00;
    }

    .subtitle {
      text-align: center;
      font-family: 'Judson', serif;
      font-size: 24px;
      color: #2c1b00;
      margin-bottom: 35px;
    }

    .form-card {
      /* Removed max-inline-size, margin, padding from here as it's handled by .container */
      text-align: left; /* Reset text alignment for form elements */
    }

    label {
      font-family: 'Judson', serif;
      font-size: 18px;
      color: #2c1b00;
      margin-bottom: 8px;
      display: block;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    select,
    textarea {
      width: 100%;
      padding: 14px 16px;
      border-radius: 10px;
      border: 1px solid #d1d1d1; /* Lighter border */
      background-color: #ebebeb; /* Light gray input background */
      font-family: 'Judson', serif;
      font-size: 16px;
      color: #555; /* Slightly darker text for inputs */
      outline: none;
      box-sizing: border-box; /* Ensure padding doesn't affect width */
    }
    
    /* Specific styling for select to match image */
    select {
        appearance: none; /* Remove default arrow */
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 16px;
        padding-right: 40px;
    }

    textarea {
      resize: vertical;
      min-height: 150px;
    }

    .form-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 30px;
    }

    .small-link {
      font-family: 'Judson', serif;
      font-size: 18px;
      color: #800000; /* Maroon color */
      text-decoration: underline;
    }

    .action-btn {
      background-color: #800000; /* Maroon color */
      color: #fff;
      padding: 14px 40px;
      border-radius: 10px;
      border: none;
      font-family: 'Judson', serif;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <header class="global-header">
    <div class="header-left"><a class="header-link" href="/menu">Menu</a></div>
    <div class="header-center"><img src="{{ asset('images/logo.jpg') }}" alt="Tabella logo"></div>
    <div class="header-right"><a class="header-link" href="/login">Login</a></div>
  </header>

  <main class="container">
    <h2 class="center">Provide your reservation details</h2>

    <form id="reservation-form" class="form-card" action="/summary" method="GET">
      
      <div style="margin-block-end: 20px;">
        <label>Select Bundle</label> 
        <select name="bundle" id="bundle-select" required>
          <option value="" disabled selected>-- Choose a Bundle --</option>
          <option value="Bundle for Solo Person">Bundle for Solo Person (₱499)</option>
          <option value="Bundle for 2 Persons">Bundle for 2 Persons (₱1,299)</option>
          <option value="Family Bundle - Tabella Feast">Family Bundle 4–6 Tabella Feast (₱3,599)</option>
          <option value="Bundle for 10-12 Persons">Bundle for 10–12 Persons (₱8,999)</option>
        </select>
      </div>

      <div style="display:flex; gap: 25px; margin-bottom: 20px;">
        <div style="flex:1;">
          <label>Number of Guest/s</label>
          <input name="guests" type="number" min="1" placeholder="1" required />
        </div>
        <div style="flex:1;">
          <label>Table Preference</label>
          <select name="preference" required>
            <option value="Indoor">Table Preference</option> <option value="Indoor">Dine-In</option>
            <option value="Outside">Alfresco</option>
          </select>
        </div>
      </div>

      <div style="display:flex; gap: 25px; margin-bottom: 20px;">
        <div style="flex:1;">
          <label>Select Date</label>
          <input type="date" name="date" required />
        </div>
        <div style="flex:1;">
          <label>Select Time</label>
          <select name="time" required>
            <option value="" disabled selected>Select Time</option> <option value="09:00">09:00 am</option>
            <option value="11:00">11:00 am</option>
            <option value="13:00">1:00 pm</option>
            <option value="15:00">3:00 pm</option>
            <option value="17:00">5:00 pm</option>
            <option value="18:00">6:00 pm</option>
            <option value="19:00">7:00 pm</option>
          </select>
        </div>
      </div>

      <div style="margin-bottom: 20px;">
        <label>Payment Method</label>
        <select name="payment" required>
          <option value="" disabled selected>Payment Method</option> <option value="PayPal">PayPal</option>
          <option value="Card">Credit / Debit Card</option>
          <option value="Bank">Bank Transfer</option>
          <option value="Counter">Over the Counter</option>
        </select>
      </div>

      <label>Special requests or notes</label>
      <textarea name="notes"></textarea>

      <div class="form-actions">
        <a class="small-link" href="/menu">Back to Menu</a>
        <button class="action-btn" type="submit">Proceed to Summary</button>
      </div>
    </form>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
  
  <script>
    document.addEventListener("DOMContentLoaded", () => {
        const selected = localStorage.getItem('tabella_selected_bundle');
        if(selected) {
            const selectBox = document.getElementById('bundle-select');
            // Try to match value, might need adjustment depending on exact strings
            for (let i = 0; i < selectBox.options.length; i++) {
                if (selectBox.options[i].value.includes(selected) || selected.includes(selectBox.options[i].value)) {
                    selectBox.selectedIndex = i;
                    break;
                }
            }
        }
    });
  </script>
</body>
</html>