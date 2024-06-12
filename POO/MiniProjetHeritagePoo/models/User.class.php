<?php

class User {
    private ?int $id = null;
    
    public function __construct(string $username, string $email, string $password, string $role, string $created_at){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->created_at = $created_at;
    }
    
    public function getUsername() : string{
        return $this->username;
    }
    
    public function setUsername(string $username) : void {
        $this->username = $username;
    }
    
    public function getEmail() : string{
        return $this->email;
    }
    
    public function setEmail(string $email) : void {
        $this->email = $email;
    }
    
    public function getPassword() : string{
        return $this->password;
    }
    
    public function setPassword(string $password) : void {
        $this->password = $password;
    }
    
    public function getRole() : string{
        return $this->role;
    }
    
    public function setRole(string $role) : void {
        $this->role = $role;
    }
    
    public function getDate() : string{
        return $this->created_at;
    }
    
    public function setDate(string $created_at) : void {
        $this->created_at = $created_at;
    }
}



?>