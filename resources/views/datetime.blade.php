<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Tabella - Home</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <header class="global-header">
    <div class="header-left">
      <a class="header-link" href="/about">About Us</a>
      <a class="header-link" href="/contact">Contact Us</a>
    </div>
    <div class="header-center"><img src="{{ asset('images/logo.jpg') }}" alt="Tabella logo"></div>
    <div class="header-right">
      <a class="header-link" href="/login">Login</a>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="overlay">
        <h2>Welcome to <span class="tabella">Tabella</span></h2>
        <h1>YOUR EVENING ELEVATED</h1>
        <button class="hero-btn" onclick="location.href='/menu'">RESERVE NOW!</button>
      </div>
    </section>

    <section class="featured">
      <div class="container">
        <h2 class="center">Featured Dishes</h2>
        <div id="bundle-section" style="margin-block-start: 20px; display: flex; align-items: center; justify-content: center; gap: 16px; flex-wrap: wrap;">
        
          <button id="prevBundle" style="background:none;border:none;font-size:24px;cursor:pointer;">◀</button>

          <div style="display:flex; gap:24px; flex-wrap:wrap; align-items:center; justify-content:center;">
            <div id="bundle-image" style="min-inline-size:260px;">
              <img src="{{ asset('images/chicken.jpg') }}" style="inline-size:100%; border-radius:10px; transition:opacity 0.4s ease;" alt="grilled chicken">
            </div>
            <div id="bundle-info" style="flex:1; padding-inline-start:20px; transition:opacity 0.4s ease;">
              <h3 id="bundle-title">Family Bundle – Tabella Feast (₱3,599)</h3>
              <ul id="bundle-list">
                <li>Good for 4–6 persons</li>
                <li>Grilled Chicken Platter</li>
                <li>Spaghetti Tabella (House Special)</li>
                <li>Garlic Rice Platter</li>
                <li>Caesar Garden Salad</li>
                <li>Chocolate Cake</li>
                <li>2 Pitchers of Iced Tea</li>
              </ul>
              <div style="margin-block-start:14px;">
                <a href="/menu" class="btn">View Full Menu</a>
              </div>
            </div>
          </div>

          <button id="nextBundle" style="background:none;border:none;font-size:24px;cursor:pointer;">▶</button>
        </div>
      </div>
    </section>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>