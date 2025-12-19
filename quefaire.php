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
<title>Que faire au Japon</title>
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
  background: url('images/12.jpg') no-repeat center center fixed;
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

header a:hover { color: #e91e63; }

.hero {
  height: 50vh;

      
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
}

.hero h1 {
  font-size: 48px;
}

.container {
  max-width: 1000px;
  margin: -50px auto 60px; 
  padding: 20px;
  text-align: center;
}

.cities {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin-bottom: 40px;
}

.city-card {
  background: white;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 6px 15px rgba(0,0,0,0.1);
  transition: transform 0.3s, box-shadow 0.3s;
  cursor: pointer;
}

.city-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}

.city-card img {
  width: 100%;
  height: 150px;
  object-fit: cover;
}

.city-card h2 {
  color: #e91e63;
  margin: 15px 0 10px 0;
}

.city-card p {
  padding: 0 10px 15px 10px;
  line-height: 1.5;
  font-size: 14px;
}

.back {
  display: inline-block;
  margin-bottom: 50px;
  background: #e91e63;
  color: white;
  padding: 12px 25px;
  border-radius: 25px;
  text-decoration: none;
  transition: 0.3s;
}

.back:hover { background: #c2185b; }

@media (max-width: 600px) {
  .hero h1 { font-size: 36px; }
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

<section class="hero">
  <h1>Que faire au Japon</h1>
</section>

<div class="container">
  <div class="cities">
    <div class="city-card">
      <img src="images/tokyo.jpg" alt="Tokyo">
      <h2>Tokyo</h2>
      <p>Capitale moderne et animée du Japon.</p>
    </div>

    <div class="city-card">
      <img src="images/kyoto.jpg" alt="Kyoto">
      <h2>Kyoto</h2>
      <p>Ancienne capitale impériale, riche en temples et traditions.</p>
    </div>

    <div class="city-card">
      <img src="images/osaka.jpg" alt="Osaka">
      <h2>Osaka</h2>
      <p>Ville dynamique célèbre pour sa cuisine et ses divertissements.</p>
    </div>

    <div class="city-card">
      <img src="images/hiroshima.jpg" alt="Hiroshima">
      <h2>Hiroshima</h2>
      <p>Ville historique avec des mémoriaux célèbres.</p>
    </div>
  </div>

  <a href="accuiel.php" class="back">← Retour à l'accueil</a>
</div>

</body>
</html>
