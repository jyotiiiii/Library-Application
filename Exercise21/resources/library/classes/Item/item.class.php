<?php

class Item {
    private $title;
    private $language;
    private $genre;
    private $loanLength;
    private $location;
    private $status;
    
    public function __construct($title, $language, $genre, $location, $loanLength, $location, $status) {
        $this->title = $title;    
        $this->language = $language; 
        $this->genre = $genre; 
        $this->loanLength = 1;
        $this->location = $location;
        $this->status = $status;
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

