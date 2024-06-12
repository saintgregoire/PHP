<?php

if(isset($_POST["password"]) && !empty($_POST["password"])){
    $password = $_POST["password"];
    echo "My password: $password<br>";
    echo 'Password hash: ' . password_hash($password, PASSWORD_DEFAULT);
}

?>