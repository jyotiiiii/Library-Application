<?php
//Eriko

class Author extends Person {
    private $dod;

    public function __construct($firstName, $lastName, $dob, $dod) {
    person::__construct($firstName, $lastName, $dob);
    $this->dod = $dod; 
    }
}