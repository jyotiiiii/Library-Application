<?php
//Chloe
require_once "item.class.php";

class DVD extends Item{
    private $director;
    private $releaseDate;
    
     
        public function __construct($title, $director, $releaseDate, $language, $genre, $location, $loanLength, $location, $status) {
        item::__construct($title, $language, $genre, $location, $loanLength, $location, $status);
        $this->director = $director;
        $this->releaseDate = $releaseDate; 
}
     
     public function get_details() {
        $details = "DVD details: \n
                '$this->title' \n
                Director: $this->director \n
                Format: $this->format \n
                Release date: $this->releaseDate \n
                Language: $this->language \n
                Genre: $this->genre \n
                Status: $this->status \n
                Location: $this->location \n";
        echo $details;
    }
    

     
}
