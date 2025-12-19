<?php

session_start();

require "db.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
  // Проверка, существует ли Email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user) {
        $message = "Cette adresse e-mail est déjà utilisée. Veuillez en choisir une autre..";
    } else {
        // Хэшируем пароль
        $hashedPassword = $password;

        // Добавляем нового пользователя
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->execute([
            "username" => $username,
            "email" => $email,
            "password" => $hashedPassword
        ]);

        $message2 = "Inscription réussie !";
        $message3 ="Bonjour ". htmlspecialchars($username);
    }

    
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>Inscription réussie</title>   
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
            padding: 0;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }

        .message-container {
            background: white;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 400px;
        }

        .message-container h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .message-container p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }

        .back {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            background: #e91e63;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        .back:hover {
            background: #c2185b;
        }
    </style>
</head>
<body>

<div class="message-container">
    <?php if (isset($message)) { echo "<h1>$message</h1>"; } ?>
    <?php if (isset($message2)) { echo "<h2>$message2</h2>"; } ?>
    <?php if (isset($message3)) { echo "<h2>$message3</h2>"; } ?>
    <p>Vous pouvez maintenant retourner à la page d'accueil.</p>
    <a href="accuiel.php" class="back">À l'accueil</a>
</div>
<?php




  
?>

</body>
</html>
