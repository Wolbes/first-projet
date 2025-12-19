<?php
$host = 'localhost';
$dbname = 'arsen';
$user = 'root';
$pass = 'root';
$port = 3306;

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

  

    

} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
