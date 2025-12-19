<?php
session_start();
require "db.php"; // Подключение к базе данных

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$idUser = $_SESSION['user_id'];

// Получаем текущие данные пользователя
$stmt = $pdo->prepare("SELECT username, email FROM users WHERE id = :id");
$stmt->execute([':id' => $idUser]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);

    // Обновляем username и email
    $stmt = $pdo->prepare("UPDATE users SET username = :username, email = :email WHERE id = :id");
    $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':id' => $idUser
    ]);

    // Обновляем пароль только если поле не пустое
    if (!empty($_POST['password'])) {
        $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("UPDATE users SET password = :password WHERE id = :id");
        $stmt->execute([
            ':password' => $passwordHash,
            ':id' => $idUser
        ]);

        $message = "Nom, email et mot de passe mis à jour avec succès ✅";
    } else {
        $message = "Nom et email mis à jour avec succès ✅";
    }

    // Обновляем значения для формы
    $user['username'] = $username;
    $user['email'] = $email;
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Compte</title>
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
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Montserrat', sans-serif; background: #f5f5f5; }

header { position: fixed; top: 0; width: 100%; background: rgba(60,60,60,0.8); padding: 15px 0; z-index: 10; }
nav { display: flex; justify-content: center; gap: 40px; }
nav a { color: white; text-decoration: none; font-weight: 500; }
nav a:hover { text-decoration: underline; }

.account-top { position: fixed; top: 15px; right: 20px; background: #e91e63; color: white; padding: 10px 22px; border-radius: 25px; text-decoration: none; font-weight: 500; z-index: 1000; }
.account-top:hover { background: #c2185b; }

.content { margin-top: 100px; max-width: 800px; margin-left: auto; margin-right: auto; padding: 50px 20px; }
h1 { font-size: 36px; margin-bottom: 30px; text-align: center; color: #333; }

.settings { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
.settings h2 { margin-bottom: 20px; color: #6a11cb; }
.settings label { display: block; margin-bottom: 5px; font-weight: 500; }
.settings input { width: 100%; padding: 10px; margin-bottom: 20px; border-radius: 10px; border: 1px solid #ccc; font-size: 16px; }
.settings button { padding: 12px 25px; border: none; border-radius: 25px; background: #6a11cb; color: white; font-weight: 500; cursor: pointer; transition: 0.3s; }
.settings button:hover { background: #2575fc; }

.message { text-align: center; margin-bottom: 20px; font-weight: 500; color: #2e7d32; }
</style>
</head>
<body>

<header>
  <nav>
    <a href="accuiel.php">Accueil</a>
    <a href="culture.php">Culture</a>
    <a href="quefaire.php">Que faire ?</a>
    <a href="tarifs.php">Tarifs</a>
    <a href="contact.php">Contact</a>
  </nav>

  <!-- Кнопка Compte -->
  <a href="account.php" class="account-top">👤 Compte</a>

  <!-- Кнопка Exit -->
  <a href="exit.php" class="exit-top" >🚪 Exit</a>
</header>
<style>
    .account-top {
  position: fixed;   /* фиксируем на экране */
  top: 5px;         /* отступ 1 */
  right: 20px;       /* отступ справа */
  background: #e91e63;
  color: white;
  padding: 10px 22px;
  border-radius: 25px;
  text-decoration: none;
  font-weight: 500;
  z-index: 1000;     /* поверх меню и контента */
}
 .exit-top {
  position: fixed;   /* фиксируем на экране */
  top: 50px;   /* отступ сверху */
  right: 20px;       /* отступ справа */
  background: #e91e63;
  color: white;
  padding: 10px 22px;
  border-radius: 25px;
  text-decoration: none;
  font-weight: 500;
  z-index: 1000;     /* поверх меню и контента */
}
</style>


<div class="content">
  <h1>Mon Compte</h1>

  <div class="settings">
    <h2>Paramètres du compte</h2>

    <?php if ($message): ?>
      <div class="message"><?= $message ?></div>
    <?php endif; ?>

    <form method="POST">
      <label for="username">Nom d'utilisateur</label>
      <input type="text" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>

      <label for="password">Mot de passe (laisser vide pour ne pas changer)</label>
      <input type="password" id="password" name="password" placeholder="Nouveau mot de passe">

      <button type="submit">Mettre à jour</button>
    </form>
  </div>
</div>

</body>
</html>
