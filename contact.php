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
  <title>Contact</title>
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
  background: url('images/9.jpg') no-repeat center center fixed;
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
      max-width: 800px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 15px;
      text-align: center;
    }

    h1 {
      margin-bottom: 30px;
    }

    .contact-item {
      margin: 20px 0;
      font-size: 18px;
    }

    .contact-item span {
      font-weight: bold;
    }

    .back {
      display: inline-block;
      margin-top: 30px;
      background: #e91e63;
      color: white;
      padding: 12px 25px;
      border-radius: 25px;
      text-decoration: none;
    }

    .back:hover {
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
  <h1>Contactez-nous</h1>

  <div class="contact-item">
    📞 <span>Téléphone :</span> +33 6 12 34 56 78
  </div>

  <div class="contact-item">
    ✉️ <span>Email :</span> contact@kyoto-travel.com
  </div>

  <div class="contact-item">
    📍 <span>Adresse :</span> 12 Rue du Japon, 75001 Paris, France
  </div>

  <a href="accuiel.php" class="back">← Retour à l'accueil</a>
</div>

</body>
</html>
