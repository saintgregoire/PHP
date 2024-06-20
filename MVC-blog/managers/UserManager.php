<?php

class UserManager extends AbstractManager{

    public function __construct(){
        parent::__construct();
    }


    public function findUser(string $email) : ?Users {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $parameters = [
            'email' => $email
        ];
        $query->execute($parameters);
        $user_data = $query->fetch(PDO::FETCH_ASSOC);
        if($user_data){
            $user = new Users($user_data['id'], $user_data['username'], $user_data['email'], $user_data['password'], $user_data['role'], $user_data['created_at']);
            
            return $user;
        }
        else{
            return null;
        }
        
    }

}
?>