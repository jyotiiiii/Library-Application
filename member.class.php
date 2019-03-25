<?php
//Jyoti
require_once "person.class.php";
class Member extends Person {
    
    private $email;
    private $address;
    
    
        public function __construct($firstName, $lastName, $dob, $email, $address) {
        person::__construct($firstName, $lastName, $dob);
            $this->email = $email;
            $this->address = $address;
        }

        public function get_email(){
            return $this->email;
        }

        public function get_address(){
            return $this->address;
    }
}

