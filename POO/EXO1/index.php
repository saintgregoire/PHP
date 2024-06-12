<?php

require 'User.php';

$first = new User(1, "admin", "admin");
$second = new User(2,"user", "user");

echo "Je suis sur le user {$admin->getUsername()}, j'ai l'id {$admin->getId()} et mon password est {$admin->getPassword()}<br>";

echo "Je suis sur le user {$user->getUsername()}, j'ai l'id {$user->getId()} et mon password est {$user->getPassword()}<br>";
?>