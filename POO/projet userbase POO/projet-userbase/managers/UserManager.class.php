<?php

require "../models/User.class.php";

class UserManager {
    
    private array $users = [];
    private PDO $db;
    
    public function __construct(){
        $this->db = new PDO("mysql:host=db.3wa.io;port=3306;dbname=maksymvoznichka_userbase_poo","maksymvoznichka","657acce4e51525b428392d26a7a85cf7");
    }
    
    public function getUsers() : array{
        return $this->users;
    }
    
    public function setUsers(array $users) : void {
        $this->users = $users;
    }
    
    public function loadUsers() : void{
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $usersDataList = $query->fetchAll(PDO::FETCH_ASSOC);
        $usersList = [];
        foreach($usersDataList as $person){
           $user = new User($person['username'], $person['email'], $person['password'], $person['role']);
           $usersList[] = $user;
        }
        $this->setUsers($usersList);
        
    }
    
    // public function saveUser(User) : void {
        
    // }
    
    // public function deleteUser(User) : void {
        
    // }
    
}


?>