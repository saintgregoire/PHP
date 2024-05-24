<?php

require 'connexion.php';
require 'create-address.html';

if(
    (isset($_POST["street"]) && !empty($_POST["street"])) &&
    (isset($_POST["city"]) && !empty($_POST["city"])) &&
    (isset($_POST["zipcode"]) && !empty($_POST["zipcode"])) 
){
    $street = $_POST["street"];
    $city = $_POST["city"];
    $zipcode = $_POST["zipcode"];
    
    $query = $db->prepare('INSERT INTO address(id, street, city, zipcode) VALUES (NULL, :street, :city, :zipcode)');
    $parameters = [
        'street' => $street,
        'city' => $city,
        'zipcode' => $zipcode
        ];
    $query->execute($parameters);
    
}

?>