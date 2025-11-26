<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Tabella - Menu</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <style>
    /* Styling specifically for the Menu Title text */
    .menu-title {
      font-family: 'OldLondon', serif; /* Matches your Reservation page style */
      font-size: 60px;
      color: #2c1b00;
      text-align: center;
      margin-top: 40px;
      margin-bottom: 5px;
      font-weight: normal;
    }

    /* Styling for the subtitle */
    .menu-subtitle {
      font-family: 'Judson', serif;
      font-size: 24px;
      color: #800000; /* Maroon color for elegance */
      text-align: center;
      margin-top: 0;
      margin-bottom: 50px;
      letter-spacing: 1px;
    }
    
    /* Ensure the body background is light if menu-bg isn't covering it */
    body {
        background-color: #fcfcfc;
    }
  </style>
</head>
<body>
  <header class="global-header">
    <div class="header-left">
      <a class="header-link" href="/about">About Us</a>
      <a class="header-link" href="/contact">Contact Us</a>
    </div>
    <div class="header-center">
      <img src="{{ asset('images/logo.jpg') }}" alt="Tabella logo" class="logo">
    </div>
    <div class="header-right">
      <a class="header-link" href="/">Home</a>
      <a class="header-link" href="/login">Login</a>
    </div>
  </header>

  <div class="menu-bg">
    <main class="container">
      
      <h1 class="menu-title">Our Menu</h1>
      <p class="menu-subtitle">Crafted with Passion, Served with Elegance</p>

      <div class="menu-grid">

        <div class="menu-card">
          <img src="{{ asset('images/menu1.jpg') }}" alt="Menu 1">
          <div class="menu-overlay">
            <h3>BUNDLE FOR SOLO PERSON</h3>
            <ul>
              <li>Grilled Chicken Meal with Rice</li>
              <li>Choice of Spaghetti or Carbonara</li>
              <li>1 Slice of Chocolate Cake</li>
              <li>1 Drink (Soft Drink or Iced Tea)</li>
            </ul>
            <div class="overlay-actions">
              <a class="btn secondary" href="#" data-bundle="Bundle for Solo Person">Details</a>
              <a class="btn" href="/reservation">Reserve now!</a>
            </div>
          </div>
        </div>

        <div class="menu-card">
          <img src="{{ asset('images/menu2.jpg') }}" alt="Menu 2">
          <div class="menu-overlay">
            <h3>BUNDLE FOR 2 PERSON</h3>
            <ul>
              <li>2 Beef Steaks with Mushroom Sauce</li>
              <li>Mashed Potatoes</li>
              <li>Vegetable Salad</li>
              <li>2 Slices of Chocolate Cake</li>
              <li>2 Glasses of Red Wine or Iced Tea</li>
            </ul>
            <div class="overlay-actions">
              <a class="btn secondary" href="#" data-bundle="Bundle for 2 Persons">Details</a>
              <a class="btn" href="/reservation">Reserve now!</a>
            </div>
          </div>
        </div>

        <div class="menu-card">
          <img src="{{ asset('images/menu3.jpg') }}" alt="Menu 3">
          <div class="menu-overlay">
            <h3>BUNDLE FOR 4-6 PERSON</h3>
            <ul>
              <li>Grilled Chicken Platter</li>
              <li>Spaghetti Tabella (House Special Pasta)</li>
              <li>Garlic Rice Platter</li>
              <li>Caesar Garden Salad</li>
              <li>Chocolate Cake</li>
              <li>2 Pitchers of Iced Tea</li>
            </ul>
            <div class="overlay-actions">
              <a class="btn secondary" href="#" data-bundle="Family Bundle - Tabella Feast">Details</a>
              <a class="btn" href="/reservation">Reserve now!</a>
            </div>
          </div>
        </div>

        <div class="menu-card">
          <img src="{{ asset('images/menu4.jpg') }}" alt="Menu 4">
          <div class="menu-overlay">
            <h3>BUNDLE FOR 10-12 PERSON</h3>
            <ul>
              <li>2 Whole Grilled Chickens</li>
              <li>Large Tray of Spaghetti al Tabella (House Special)</li>
              <li>Large Tray of Garlic Rice</li>
              <li>Mixed Seafood Platter (Shrimp, Calamares, Grilled Fish)</li>
              <li>Caesar Salad Bowl</li>
              <li>Chocolate Cake (Whole)</li>
              <li>Fruit Platter</li>
              <li>3 Pitchers of Iced Tea or Lemonade</li>
            </ul>
            <div class="overlay-actions">
              <a class="btn secondary" href="#" data-bundle="Bundle for 10-12 Persons">Details</a>
              <a class="btn" href="/reservation">Reserve now!</a>
            </div>
          </div>
        </div>

      </div>

      <p class="center">
        <a href="/" class="small-link">Back to Home</a>
      </p>
    </main>
  </div>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>