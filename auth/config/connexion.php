<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "maksymvoznichka_php_j7";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "maksymvoznichka";
$password = "657acce4e51525b428392d26a7a85cf7";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
