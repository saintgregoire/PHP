<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

session_start();
require "../config/connexion.php";

if(isset($_POST["email"])
    && isset($_POST["password"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = $db->prepare("SELECT * FROM users WHERE email = :email");

    $parameters = [
        "email" => $email,
    ];

    $query->execute($parameters);

    $user = $query->fetch();

    if($user)
    {
        if(password_verify($password, $user['password']))
        {
            $_SESSION["user"] = [];
            $_SESSION["user"]["first_name"] = $user["first_name"];
            $_SESSION["user"]["last_name"] = $user["last_name"];

            header('Location: index.php?route=home');
        }
        else
        {
            echo "<h1>Mot de passe incorrect</h1>";
            echo "<a href='../index.php'>Retour à l'accueil</a>";
        }
    }
    else
    {
        echo "<h1>Email incorrect</h1>";
        echo "<a href='../index.php'>Retour à l'accueil</a>";
    }

    header('Location: ../index.php?route=home');
}

