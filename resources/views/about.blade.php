<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>About - Tabella</title>
  <style>
    body {
      background: url('{{ asset("images/aboutbg.jpg") }}') center/cover no-repeat fixed;
      margin: 0;
      color: #2c1b00;
      font-family: "Judson", serif;
    }

    /* === HEADER STYLES === */
    header.global-header {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #f1f1f1;
      padding: 10px 60px;
      font-weight: bold;
      font-size: 18px;
      position: relative;
    }

    .header-left { flex: 1; }
    .header-center { flex: 1; display: flex; justify-content: center; }
    .header-center img { width: 70px; height: auto; }
    .header-right { flex: 1; display: flex; justify-content: flex-end; gap: 20px; }
    
    .header-link {
      text-decoration: none;
      color: #2c1b00;
      font-weight: bold;
      transition: color 0.3s;
    }
    .header-link:hover { color: #8b4513; }

    /* === MAIN LAYOUT === */
    main {
      min-block-size: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 10px 20px 60px; 
      background: rgba(255, 255, 255, 0.6);
    }

    .about-section {
      max-inline-size: 1000px;
      margin: 0 auto;
    }

    .about-section h2 {
      font-family: 'Cinzel Decorative', serif;
      font-size: 36px;
      margin-block-end: 20px;
    }

    .about-section p {
      font-size: 20px;
      line-height: 1.8;
      margin-block-end: 50px;
    }

    /* === UPDATED GALLERY STYLES === */
    .about-gallery {
      /* Use Grid to force one horizontal row */
      display: grid;
      grid-template-columns: repeat(4, 1fr); /* 4 equal columns */
      gap: 20px;
      /* Vertically center the images so the short ones float in the middle */
      align-items: center; 
    }

    .about-gallery img {
      width: 100%; /* Fill the column width */
      object-fit: cover;
      border-radius: 18px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* 1st and 3rd Images (Odd numbers) - SHORTER */
    .about-gallery img:nth-child(odd) {
      height: 250px; 
    }

    /* 2nd and 4th Images (Even numbers) - LONGER */
    .about-gallery img:nth-child(even) {
      height: 380px; 
    }

    .about-gallery img:hover {
      transform: scale(1.03);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
    }

    /* Responsive: Stack them on mobile screens so they don't get too small */
    @media (max-width: 768px) {
      .about-gallery {
        grid-template-columns: repeat(2, 1fr); /* 2 per row on tablets */
      }
    }
  </style>
</head>
<body>
  <header class="global-header">
    <div class="header-left"></div> 
    <div class="header-center">
      <img src="{{ asset('images/logo.jpg') }}" alt="Tabella logo">
    </div>
    <div class="header-right">
      <a class="header-link" href="/contact">Contact Us</a>
      <a class="header-link" href="/">Home</a>
    </div>
  </header>

  <main>
    <section class="about-section">
      <h2>About Us</h2>
      <p>
        Tabella is a fine dining restaurant that blends warmth, elegance, and modern sophistication.
        Inspired by Filipino hospitality, we create a dining experience that’s both luxurious and welcoming.
        Each dish is crafted with passion and care, offering guests a perfect balance of comfort, flavor, and class.
        At Tabella, every table tells a story — of good food, shared moments, and genuine service.
      </p>

      <div class="about-gallery">
        <img src="{{ asset('images/chef1.jpg') }}" alt="Chef preparing meal">
        <img src="{{ asset('images/chef2.jpg') }}" alt="Serving pasta">
        <img src="{{ asset('images/chef3.jpg') }}" alt="Team photo">
        <img src="{{ asset('images/chef4.jpg') }}" alt="Team photo">
      </div>
    </section>
  </main>
</body>
</html>