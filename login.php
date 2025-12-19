<?php
session_start();
require "db.php";


// Инициализация переменных
$success = false;
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    // Поиск пользователя по email
    $stmt = $pdo->prepare("SELECT id, email, password FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]); // только один массив
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Проверка пароля
    if ($user && $password === $user['password']) {
        // Создание сессии
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email']   = $user['email'];

        $success = true;
        $message = "✅ Connexion réussie ! Redirection vers l'accueil...";

        // Редирект через 1 секунду
        header("refresh:1; url=accuiel.php");

    } else {
        $message = "❌ Email ou mot de passe incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }

        .message-container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 380px;
            text-align: center;
        }

        h1 {
            margin-bottom: 25px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 10px;
            background: #6a11cb;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #2575fc;
        }

        .error {
            color: #e91e63;
            font-size: 16px;
            margin-top: 15px;
        }

        .success {
            color: #2e7d32;
            font-size: 16px;
            margin-top: 15px;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #6a11cb;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="message-container">
    <h1>Connexion</h1>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>

    <?php if ($message): ?>
        <div class="<?= $success ? 'success' : 'error' ?>">
            <?= $message ?>
        </div>
    <?php endif; ?>

    
</div>

</body>
</html>
