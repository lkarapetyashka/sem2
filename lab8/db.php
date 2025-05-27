<?php
//файл соединения с базой данных mysql
$host   = 'localhost';
$dbname = 'u68792';
$user   = 'u68792';
$pass   = '1210453';
//Подключаемся к базе
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
?>
