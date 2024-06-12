<?php
require "../config/database.php";
require "../models/User.php";
require "../logic/user_functions.php";

$route = " ";

if(isset($_GET['route'])){
    $route = $_GET['route'];
}

if($route === 'get_all_users'){
    $allUsersData = getAllUsers($db);
    $usersDataArray = [];
    foreach($allUsersData as $line){
        $user = new User(
            $line['username'], 
            $line['email'], 
            $line['password'], 
            $line['role'], 
            $line['created_at']
        );
        $user->setId($line['id']);
        $userData = $user->toArray();
        $usersDataArray[] = $userData;
    }
    echo json_encode($usersDataArray);
}

if($route === 'get_user_by_id'){
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $userData = getUserById($db, $id);
        if ($userData !== null){
            echo json_encode($user);
        }
    }
}

?>