<?php
namespace classes;

class Member {
    private $firstName;
    private $lastName;
    private $dob;
    private $email;
    private $address;
    private $phone;
    
    public function __construct($firstName, $lastName, $dob, $email, $address, $phone){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dob = $dob;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
    }
    
    public function fullName() {
        return $this->firstName . " " . $this->lastName;
    }
    
    public function welcome(){
        return "Hello, ". $this->firstName ." " . $this->lastName . ". Welcome to the library.<BR>";
    }
    public function setName($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
}
    public function getDob(){
        return $this->dob;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function getAddress(){
        return $this->address;
    }
    
    public function setEmail ($email){
        $this->email = $email;
    }
    
    public function setPhone ($phone){
        $this->phone = $phone;   
    }
}

