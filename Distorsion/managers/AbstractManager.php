<?php

abstract class AbstractManager {
    protected PDO $db;
    
    public function __construct(){
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "maksymvoznichka_bre02_distorsion";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";
        
        $user = "maksymvoznichka";
        $password = "657acce4e51525b428392d26a7a85cf7";
        
        $this->db = new PDO(
            $connexionString,
            $user,
            $password
        );
    }
}

?>