<?php

class UserManager extends AbstractManager{

    public function __construct(){
        parent::__construct();
    }
    
    
    public function findUser(string $email) : ?User {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $parameters = [
            'email' => $email
        ];
        $query->execute($parameters);
        $user_data = $query->fetch(PDO::FETCH_ASSOC);
        if($user_data){
            $user = new User($user_data['id'], $user_data['username'], $user_data['email'], $user_data['password'], $user_data['role'], $user_data['created_at']);
            
            return $user;
        }
        else{
            return null;
        }
        
    }
    
    public function addUser() : void{
                $query = $this->db->prepare('INSERT INTO users( id, username, email, password, role, created_at) VALUES (NULL, :username, :email, :password, :role, NULL)');
                $parameters = [
                    'username' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'role' => $_POST['role']
                    ];
                $query->execute($parameters);
    }
}

?>