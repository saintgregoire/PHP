<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

require "../config/connexion.php";

if(isset($_POST["first_name"])
&& isset($_POST["last_name"])
&& isset($_POST["email"])
&& isset($_POST["password"]))
{
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $query = $db->prepare("INSERT INTO users (id, first_name, last_name, email, password) VALUES (NULL, :first_name, :last_name, :email, :password)");

    $parameters = [
        "first_name" => $first_name,
        "last_name" => $last_name,
        "email" => $email,
        "password" => $hash
    ];

    $query->execute($parameters);

    header('Location: ../index.php?route=home');
}

