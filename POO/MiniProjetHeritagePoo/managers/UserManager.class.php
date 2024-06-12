<?php
require "./models/User.class.php";

class UserManager extends AbstractManager{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function findAll() : array {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        $users_list = [];
        foreach($users as $user){
            $user = new User($user['username'], $user['email'], $user['password'], $user['role'], $user['created_at']);
            $users_list[] = $user;
        }
        return $users_list;
    }
    
    public function findOne(int $id) : ? User {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $user_data = $query->fetch(PDO::FETCH_ASSOC);
        $one_user = new User($user_data['username'], $user_data['email'], $user_data['password'], $user_data['role'], $user_data['created_at']);
        return $one_user;
    }
    
    public function create(User $new_user) : void{
        $query = $this->db->prepare('INSERT INTO users(username, email, password, role, created_at) VALUES(:username, :email, :password, :role, :created_at)' );
        $parameters =[
            'username' => $new_user->getUsername(),
            'email' => $new_user->getEmail(),
            'password' => $new_user->getPassword(),
            'role' => $new_user->getRole(),
            'created_at' => $new_user->getDate()
            ];
        $query->execute($parameters);
    }
    
    public function update(User $up_user) : void{
        $query = $this->db->prepare('UPDATE users SET username = :username,
            email = :email,
            password = :password,
            role = :role,
            created_at = :created_at
            WHERE email = :email');
        $parameters = [
            'username' => $up_user->getUsername(),
            'email' => $up_user->getEmail(),
            'password' => $up_user->getPassword(),
            'role' => $up_user->getRole(),
            'created_at' => $up_user->getDate() 
        ];
        $query->execute($parameters);
    }
    
    public function delete(int $id) : void {
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $query = $this->db->prepare('UPDATE posts SET author = null WHERE author = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
    }
}

// $test = new UserManager();
// $testResult = $test->findOne(1);
// var_dump($testResult);

?>