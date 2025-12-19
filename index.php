<?php
session_start();
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Montserrat', sans-serif;
    }
</style>
    <style>
        /* Общий стиль страницы */
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

        /* Контейнер формы */
        .register-container {
            background: white;
            padding: 40px 50px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }

        /* Заголовок */
        .register-container h2 {
            margin-bottom: 30px;
            color: #333;
        }

        /* Поля ввода */
        .register-container input {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
            transition: 0.3s;
        }

        .register-container input:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
            outline: none;
        }

        /* Кнопка */
        .register-container button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            border: none;
            border-radius: 10px;
            background-color: #6a11cb;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .register-container button:hover {
            background-color: #2575fc;
        }

        /* Ссылка на вход */
        .register-container p {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }

        .register-container a {
            color: #2575fc;
            text-decoration: none;
        }

        .register-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Registration</h2>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
