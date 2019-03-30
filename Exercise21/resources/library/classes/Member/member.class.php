<?php
//Jyoti
require_once "member.class.php";

class Member {
    private $firstName;
    private $lastName;
    private $dob;
    private $email;
    private $address;
    
    public function __construct($firstName, $lastName, $dob, $email, $address){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dob = $dob;
        $this->email = $email;
        $this->address = $address;
    }
    
    public function fullName() {
        return $this->firstName . " " . $this->lastName;
    }
    
    public function welcome(){
        return "Hello, ". $this->firstName ." " . $this->lastName . ". Welcome to the library.\n";
    }
    public function setName($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
}
    public function getDob(){
        return $this->dob;
    }
    
    public function get_email(){
            return $this->email;
        }

    public function get_address(){
            return $this->address;
    }
}

