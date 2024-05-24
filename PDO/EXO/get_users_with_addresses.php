<?php

require "connexion.php";

require 'connexion.php';

$query = $db->prepare('SELECT users.*, address.* FROM users JOIN address ON users.address = address.id');
$query->execute();
$users_with_addres = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users_with_addres)

?>