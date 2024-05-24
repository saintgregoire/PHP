<?php

require 'connexion.php';
require 'edit-address.html';

if(
    (isset($_POST["street"]) && !empty($_POST["street"])) &&
    (isset($_POST["city"]) && !empty($_POST["city"])) &&
    (isset($_POST["zipcode"]) && !empty($_POST["zipcode"])) &&
    (isset($_POST["id"]) && !empty($_POST["id"]))
){
    $id = $_POST["id"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $zipcode = $_POST["zipcode"];
    
    $query = $db->prepare('UPDATE address 
    SET street = :street,
    city = :city,
    zipcode = :zipcode
    WHERE id = :id
    ');
    $parameters = [
        'id' => $id,
        'street' => $street,
        'city' => $city,
        'zipcode' => $zipcode
    ];
    $query->execute($parameters);
 }
?>