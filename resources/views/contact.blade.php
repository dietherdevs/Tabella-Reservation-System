<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Contact - Tabella</title>
  <link href="https://fonts.googleapis.com/css2?family=Judson:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --gold: #a17842;
    }

    body {
      font-family: 'Judson', serif;
      margin: 0;
      background: #fff;
      color: #000;
    }


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

    header img {
      block-size: 70px;
    }

    .header-links {
      display: flex;
      gap: 25px;
      position: absolute;
      inset-inline-end: 60px;
    }

    .header-link {
      text-decoration: none;
      color: #000;
      position: relative;
    }

    .header-link:hover::after {
      content: '';
      position: absolute;
      inset-block-end: -5px;
      inset-inline-start: 0;
      inline-size: 100%;
      block-size: 2px;
      background-color: var(--gold);
    }

    main.container {
      text-align: center;
      padding: 40px 20px;
    }

    h1.center {
      font-size: 32px;
      margin-block-end: 20px;
      font-weight: 700;
    }

    .contact-card {
      background: var(--gold);
      color: white;
      border-radius: 25px;
      padding: 40px 60px;
      max-inline-size: 800px;
      margin: 0 auto;
      font-size: 20px;
      line-height: 1.8;
      font-weight: 700;
    }

    .contact-card h3 {
      margin-block-end: 15px;
      font-weight: 700;
    }

    .contact-card p {
      margin: 0 0 20px 0;
    }

    .icon {
      font-size: 22px;
      margin-inline-end: 5px;
    }
  </style>
</head>

<body>
  <header class="global-header">
    <div class="header-center">
      <img src="{{ asset('images/logo.jpg') }}" alt="Tabella logo">
    </div>
    <div class="header-links">
      <a class="header-link" href="/about">About Us</a>
      <a class="header-link" href="/">Home</a>
    </div>
  </header>

  <main class="container">
    <h1 class="center">Contact Us</h1>
    <div class="contact-card">
      <h3>Restaurant Address and Contact Number</h3>
      <p>- Tabella Fine Dining<br>
      - Blk 8 Lot 12, Greenview Avenue, Tuguegarao City, Cagayan Valley<br>
      - <span class="icon">📞</span>(078) 654-1234<br>
      - <span class="icon">📱</span>+63 917 456 7890</p>

      <h3>Operating Hours</h3>
      <p>- Monday – Thursday: 11:00 AM – 9:00 PM<br>
      - Friday – Sunday: 11:00 AM – 10:30 PM</p>
    </div>
  </main>
</body>
</html>