<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Benin Découverte</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", sans-serif;
      background: linear-gradient(135deg, #0a3d2b 10%, #f1c27d 100%);
      color: white;
    }

    /* NAVBAR */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      flex-wrap: wrap;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      width: 80px;
      height: 80px;
    }

    .logo-text {
      font-size: 1.6rem;
      font-weight: bold;
      color: #fbbf24;
      text-decoration: none;
    }

    .visit-btn {
      background-color: #fbbf24;
      color: #000;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
      margin-top: 0.5rem;
    }

    .visit-btn:hover {
      background-color: #d97706;
      color: white;
    }

    /* MAIN CONTENT */
    main {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 3rem 2rem;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .content {
      flex: 1;
      min-width: 280px;
      text-align: left;
    }

    h1 {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 1rem;
      color: #fbbf24;
    }

    p {
      max-width: 550px;
      font-size: 1rem;
      color: #e5e7eb;
      margin-bottom: 2rem;
    }

    .spline-embed {
      flex: 1;
      min-width: 280px;
      height: 400px;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .spline-embed iframe {
      width: 100%;
      height: 100%;
      border: none;
    }

    /* RESPONSIVE */
    @media (max-width: 1024px) {
      h1 {
        font-size: 2rem;
      }
      .spline-embed {
        height: 350px;
      }
    }

    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: center;
        gap: 1rem;
      }
      main {
        flex-direction: column;
        text-align: center;
        padding: 2rem 1rem;
      }
      .content {
        text-align: center;
      }
      h1 {
        font-size: 1.8rem;
      }
      p {
        font-size: 0.95rem;
        max-width: 100%;
      }
      .spline-embed {
        height: 300px;
      }
    }

    @media (max-width: 480px) {
      .logo img {
        width: 60px;
        height: 60px;
      }
      .logo-text {
        font-size: 1.4rem;
      }
      .visit-btn {
        padding: 0.4rem 0.8rem;
        font-size: 0.9rem;
      }
      h1 {
        font-size: 1.5rem;
      }
      .spline-embed {
        height: 250px;
      }
    }

  </style>
</head>

<body>

  <header>
    <nav class="navbar">
      <div class="logo">
        <img src="{{ asset('assets/images/icon-removebg-preview.png') }}" alt="Benin Découverte">
        <a href="{{ route('index') }}" class="logo-text">Benin Découverte</a>
      </div>

      <a class="visit-btn" href="{{ route('index') }}">Visiter &gt;</a>
    </nav>
  </header>

  <main>
    <div class="content">
      <h1>Explorez le Bénin autrement</h1>
      <p>
        Découvrez la richesse culturelle, les sites touristiques, la nature et les traditions du Bénin. 
        Une plateforme moderne et immersive pour vous guider à travers les merveilles du pays.
      </p>
    </div>

    <div class="spline-embed">
      <iframe src="https://my.spline.design/retrofuturismbganimation-GqosCTdAIfHHoOYTB1yPfY5R/" allowfullscreen></iframe>
    </div>
  </main>

</body>
</html>
