<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Tabella - Home</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <style>
    /* CSS to force the logo to the exact center */
    header.global-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 60px; 
      height: 90px; 
      background: rgba(253, 253, 253, 0.95);
    }

    /* Make left and right sides take equal space */
    .header-left, .header-right {
      flex: 1; /* Takes up available space equally */
      display: flex;
      align-items: center;
    }

    /* Push right navigation to the end */
    .header-right {
      justify-content: flex-end;
    }

    /* Center the logo container */
    .header-center {
      display: flex;
      justify-content: center;
      align-items: center;
      /* Optional: Give it a fixed width if needed, but flex usually handles it */
    }

    /* Logo sizing */
    .header-center img { 
      height: 80px; 
      width: auto; 
    }
  </style>
</head>
<body>
  <header class="global-header">
    <div class="header-left">
      <a class="header-link" href="/about">About Us</a>
      <a class="header-link" style="margin-left: 20px;" href="/contact">Contact Us</a>
    </div>
    
    <div class="header-center">
      <img src="{{ asset('images/logo.jpg') }}" alt="Tabella logo">
    </div>
    
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

          <div style="display:flex; gap:24px; flex-wrap:wrap; align-items:center; justify-content:center; max-width: 900px;">
            
            <div id="bundle-image" style="width: 400px; height: 300px; flex-shrink: 0; overflow: hidden; border-radius: 10px;">
              <img src="{{ asset('images/chicken.jpg') }}" style="width: 100%; height: 100%; object-fit: cover; transition:opacity 0.4s ease;" alt="featured dish">
            </div>

            <div id="bundle-info" style="flex:1; padding-inline-start:20px; transition:opacity 0.4s ease; min-width: 300px;">
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