<?php

require 'connexion.php';

$query = $db->prepare('SELECT users.*, address.* FROM users JOIN address ON users.address = address.id WHERE users.id = :id');
$parameters = [
    'id' => $_GET['id']
    ];
$query->execute($parameters);
$user_with_addres = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user_with_addres)

?>