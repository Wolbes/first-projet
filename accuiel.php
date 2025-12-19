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
  <title>Découvrez Kyoto</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Montserrat', sans-serif;
    }
     

    /* NAVBAR */
    header {
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(60,60,60,0.8);
      padding: 15px 0;
      z-index: 10;
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 40px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
    }

    nav a:hover {
      text-decoration: underline;
    }

    /* HERO */
    .hero {
      height: 100vh;
      background:
        linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
        url('images/1.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .hero-content {
      max-width: 700px;
    }

    .logo {
      background: #d71920;
      width: 90px;
      height: 90px;
      margin: 0 auto 20px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 40px;
    }

    h1 {
      font-size: 64px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .subtitle {
      font-size: 20px;
      margin-bottom: 30px;
    }

    .btn {
      display: inline-block;
      background: #e91e63;
      color: white;
      padding: 15px 35px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 500;
    }

    .btn:hover {
      background: #c2185b;
    }

    @media (max-width: 768px) {
      h1 { font-size: 42px; }
      nav { gap: 20px; }
    }
  </style>
</head>

<body>

<header>
  <nav class="nav-bar">
    <a href="accuiel.php">Accueil</a>
    <a href="culture.php">Culture</a>
    <a href="quefaire.php">Que faire ?</a>
    <a href="tarifs.php">Tarifs</a>
    <a href="contact.php">Contact</a>
  </nav>

  <!-- Кнопка Compte отдельно -->
  <a href="account.php" class="account-top">👤 Compte</a>
  <style>
    .account-top {
  position: fixed;   /* фиксируем на экране */
  top: 5px;         /* отступ сверху */
  right: 20px;       /* отступ справа */
  background: #e91e63;
  color: white;
  padding: 10px 22px;
  border-radius: 25px;
  text-decoration: none;
  font-weight: 500;
  z-index: 1000;     /* поверх меню и контента */
}

.account-top:hover {
  background: #c2185b;
}
</style>
</header>



<section class="hero">
  <div class="hero-content">
    <div class="logo">⛩</div>
    <h1>Découvrez Kyoto</h1>
    <p class="subtitle">La ville impériale du Japon.</p>
    <a href="culture.php" class="btn">En savoir plus</a>
  </div>
</section>

</body>
</html>
