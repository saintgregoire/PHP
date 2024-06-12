<?php
class User{
    
    public function __construct(private int $id, private string $username, private string $email, private string $password, private string $role, private ?string $created_at){
        
    }
    
    public function getId() : int {
        return $this->id;
    }
    
    public function setId(int $id) : void {
        $this->id = $id;
    }
    
    public function getUsername() : string {
        return $this->username;
    }
    
    public function setUsername(string $username) : void {
        $this->usermane = $username;
    }
    
    public function getPassword() : string {
        return $this->password;
    }
    
    public function setPassword(string $password) : void {
        $this-> password = $password;
    }
    
    public function getEmail() : string {
        return $this->email;
    }
    
    public function setEmail(string $email) : void {
        $this-> email = $email;
    }
    
    public function getRole() : string {
        return $this->role;
    }
    
    public function setRole(string $role) : void {
        $this-> role = $role;
    }
    
    public function getCreated() : ?string {
        return $this->created_at;
    }
    
    public function setCreated(string $created_at) : void {
        $this-> created_at = $created_at;
    }
    
}


?>