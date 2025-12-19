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
  <title>Tarifs</title>
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
  background: url('images/6.jpg') no-repeat center center fixed;
  background-size: cover;
    }


    header {
      background: #333;
      padding: 15px;
      text-align: center;
    }

    header a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin-bottom: 30px;
      color: white;
    }

    .plans {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .plan {
      background: white;
      width: 280px;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .plan h2 {
      color: #d71920;
      margin-bottom: 10px;
    }

    .price {
      font-size: 32px;
      margin: 15px 0;
    }

    .plan ul {
      list-style: none;
      padding: 0;
    }

    .plan li {
      margin: 10px 0;
    }

    .btn {
      display: inline-block;
      margin-top: 20px;
      background: #e91e63;
      color: white;
      padding: 12px 25px;
      border-radius: 25px;
      text-decoration: none;
    }

    .btn:hover {
      background: #c2185b;
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
  <h1>Nos tarifs mensuels</h1>

  <div class="plans">
    <div class="plan">
      <h2>Basic</h2>
      <p class="price">5€ / mois</p>
      <ul>
        <li>Accès au site</li>
        <li>Articles culturels</li>
        <li>Support basique</li>
      </ul>
      <a href="#" class="btn">Choisir</a>
    </div>

    <div class="plan">
      <h2>Standard</h2>
      <p class="price">10€ / mois</p>
      <ul>
        <li>Tout Basic</li>
        <li>Contenu exclusif</li>
        <li>Accès anticipé</li>
      </ul>
      <a href="#" class="btn">Choisir</a>
    </div>

    <div class="plan">
      <h2>Premium</h2>
      <p class="price">20€ / mois</p>
      <ul>
        <li>Tout Standard</li>
        <li>Guides complets</li>
        <li>Support prioritaire</li>
      </ul>
      <a href="#" class="btn">Choisir</a>
    </div>
  </div>
</div>

</body>
</html>