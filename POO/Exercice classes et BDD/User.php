<?php

class User{
   
    private ? int $id = null;
    
    public function __construct(private string $firstName, private string $lastName, private string $email){
        
    }
    
    public function getId() : ? int {
        return $this->id;
    }
    
    public function setId(int $id) : void {
        $this->id = $id;
    }
    
    public function getFirstName() : string{
        return $this->firstName;
    }
    
    public function setFirstName(string $firstName) : void{
        $this->firstName = $firstName;
    }
    
    public function getLastName() : string {
        return $this->lastName;
    }
    
    public function setLastName(string $lastName) : void {
        $this->lastName = $lastName;
    }
    
    public function getEmail() : string {
        return $this->email;
    }
    
    public function setEmail(string $email) : void {
        $this->email = $email;
    }
    
}


?>