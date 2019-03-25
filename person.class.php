<?php

class Person {
    private $firstName;
    private $lastName;
    private $dob;
    
    public function __construct($firstName, $lastName, $dob){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dob = $dob;
    }
    
    public function fullName() {
        return $this->firstName . " " . $this->lastName;
    }
    
    public function welcome(){
        return "Hello, ". $this->firstName ." " . $this->lastName . ". Welcome to the library.\n";
    }
    public function getDob(){
        return $this->dob;
    }
}

