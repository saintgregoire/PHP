<?php
require "connexion.php";
require "User.php";

$query = $db->prepare('SELECT * FROM users LIMIT 1');
$query->execute();
$userData = $query->fetch(PDO::FETCH_ASSOC);


$superman = [
	"first_name" => "Clark",
	"last_name" => "Kent",
	"email" => "clark.kent@test.fr"
];

$user = new User($superman["first_name"], $superman["last_name"], $superman["email"]);
var_dump($user);

$userSecond = new User($userData["first_name"], $userData["last_name"], $userData["email"]);


$query = $db->prepare('INSERT INTO users (first_name, last_name, email) VALUES (:first_name, :last_name, :email)');

$parameters = [
        first_name => $user->getFirstName(),
	    last_name => $user->getLastName(),
	    email => $user->getEmail()
    ];
    
$query->execute($parameters);

?>