<?php
session_start(); // Начинаем сессию

// Очистка всех данных сессии
$_SESSION = [];

// Уничтожаем сессию
session_destroy();

// Перенаправление на главную страницу
header("Location: /index"); // если твоя главная страница — localhost/index
exit;
?>
