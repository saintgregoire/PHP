<?php

require "../managers/UserManager.class.php";

$userManager = new UserManager();
$userManager->loadUsers();
$allUsers = $userManager->getUsers();
?>

