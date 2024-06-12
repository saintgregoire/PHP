<?php

function getAllUsers(PDO $db) : array 
{
    $query = $db->prepare('SELECT * FROM users');
    $query->execute();
    $usersData = $query->fetchAll(PDO::FETCH_ASSOC);
    return $usersData;
}

function getUserById(PDO $db, int $id) : ? User 
{
    $query = $db->prepare('SELECT * FROM users WHERE id = :id');
    $parameters = [
       'id' => $id 
        ];
    $query->execute($parameters);
    $userById = $query->fetch(PDO::FETCH_ASSOC);
    
    if($userById){
        $user = new User ($userById['username'], $userById['email'], $userById['password'], $userById['role'], $userById['created_at']);
        $user->setId($userById['id']);
        return $user;
    }
    else{
        return null;
    }
    
}

?>