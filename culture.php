<?php
session_start();
require "db.php";
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Culture du Japon</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Montserrat', sans-serif;
    }
</style>
  <style>
   body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: url('images/11.jpg') no-repeat center center fixed;
  background-size: cover;
    }

    header {
      background: #333;
      padding: 15px;
      text-align: center;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    header a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: 500;
      transition: 0.3s;
    }

    header a:hover {
      color: #e91e63;
    }

    .container {
      max-width: 1000px;
      margin: 60px auto;
      padding: 0 20px;
    }

    h1 {
      text-align: center;
      color: white;
      margin-bottom: 50px;
      font-size: 48px;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
    }

    .card-content h2 {
      color: #e91e63;
      margin-bottom: 15px;
      font-size: 24px;
    }

    .card-content p {
      line-height: 1.7;
    }

    .back {
      display: inline-block;
      margin: 40px auto 0;
      background: #e91e63;
      color: white;
      padding: 12px 25px;
      border-radius: 25px;
      text-decoration: none;
      text-align: center;
      transition: 0.3s;
    }

    .back:hover {
      background: #c2185b;
    }

    @media (max-width: 600px) {
      h1 { font-size: 36px; }
      .card-content h2 { font-size: 20px; }
    }
     #lo {
      color: white;
    }
  </style>
</head>
<body>

<header>
  <a href="accuiel.php">Accueil</a>
  <a href="culture.php">Culture</a>
  <a href="quefaire.php">Que faire ?</a>
  <a href="tarifs.php">Tarifs</a>
  <a href="contact.php">Contact</a>
</header>

<div class="container">
  <h1>La culture du Japon</h1>

  <div class="cards">
    <div class="card">
      <img src="images/2.jpg" alt="Traditions Japonaises">
      <div class="card-content">
        <h2>🎎 Traditions</h2>
        <p>La cérémonie du thé, le kimono, l'ikebana et la calligraphie. Ces pratiques mettent l'accent sur la simplicité et l'harmonie.</p>
      </div>
    </div>

    <div class="card">
      <img src="images/3.jpg" alt="Temple Japonais">
      <div class="card-content">
        <h2>⛩ Religion et spiritualité</h2>
        <p>Le shintoïsme et le bouddhisme façonnent la vie quotidienne. Les sanctuaires et temples sont omniprésents et respectés par tous.</p>
      </div>
    </div>

    <div class="card">
      <img src="images/4.jpg" alt="Cuisine Japonaise">
      <div class="card-content">
        <h2>🍣 Cuisine japonaise</h2>
        <p>Sushi, ramen, tempura et yakitori. La présentation est toujours esthétique et les produits sont frais et de qualité.</p>
      </div>
    </div>

    <div class="card">
      <img src="images/5.jpg" alt="Vie moderne">
      <div class="card-content">
        <h2>🎌 Vie moderne</h2>
        <p>Technologie avancée, animation, jeux vidéo et culture pop. Le Japon mélange traditions et modernité avec élégance.</p>
      </div>
    </div>
  </div>
   <div id="lo">
  <p>Découvrez la culture japonaise à travers cette vidéo :</p>
  </div>
<video width="560" controls>
  <source src="videos/mon_video.mp4" type="video/mp4">
  Votre navigateur ne supporte pas la lecture de vidéos.
</video>



  <a href="accuiel.php" class="back">← Retour à l'accueil</a>
</div>

</body>
</html>
