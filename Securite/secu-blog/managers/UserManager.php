<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class UserManager extends AbstractManager
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function findByEmail(string $email) : ? User {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $parameters = [
            'email' => $email
            ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($result){
            $user = new User($result['id'], $result['username'], $result['email'], $result['password'], $result['role'], $result['created_at']);
            
            return $user;
        }
        else {
            return null;
        }
        
    }
    
    public function create(User $user) : void{
        $query = $this->db->prepare('INSERT INTO users (id, username, email, password, role, created_at) VALUES (:id, :username, :email, :password, :role, :created_at)');
        $parameters = [
            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role' => $user->getRole(),
            'created_at' => $user->getCreated()
            ];
        $query->execute($parameters);
    }
    
    public function findById(int $id) : ? User {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $parameters = [
            'id' => $id
            ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($result){
            $user = new User($result['id'], $result['username'], $result['email'], $result['password'], $result['role'], $result['created_at']);
            
            return $user;
        }
        else {
            return null;
        }

    }
}