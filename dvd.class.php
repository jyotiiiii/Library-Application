<?php
//Chloe

class DVD {
    private $title;
    private $director;
    private $format;
    private $releaseDate;
    private $language;
    private $genre;
    private $loanLength;
    private $location;
    private $status;
    
     public function __construct($title, $director, $releaseDate, $language, $genre, $location, $status) {
        $this->title = $title;    
        $this->director = $director; 
        $this->format = "DVD";
        $this->releaseDate = $releaseDate; 
        $this->language = $language; 
        $this->genre = $genre; 
        $this->loanLength = 1;
        $this->location = $location;
        $this->status = $status;
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
                Location: $this->location";
        echo $details;
    }
    
    public function set_status ($newStatus) {
      $this->status = $newStatus;
    }
   
    public function get_status() {
        return $this->status;
    }
    
    public function get_location(){
        return $this->location;
    }
     
}
