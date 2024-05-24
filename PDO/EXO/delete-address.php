<?php

require 'connexion.php';
require 'delete-address.html';

if((isset($_POST["id"])) && !empty($_POST["id"])){
    $id = $_POST["id"];
    
    $query = $db->prepare('DELETE FROM address WHERE id = :id');
    $parameters = [
        'id' => $id    
    ];
    $query->execute($parameters);
}

?>