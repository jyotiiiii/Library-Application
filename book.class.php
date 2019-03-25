<?php
//Rosa
//namespace Classes\Book;

class Book {
    private $title;
    private $author;
    private $language;
    private $genre;
    private $loanLength;
    private $location;
    private $status;
    
    public function __construct($title,$author,$language,$genre,$location,$status) {
        $this->title = $title;    
        $this->author = $author; 
        $this->language = $language; 
        $this->genre = $genre; 
        $this->loanLength = 3;
        $this->location = $location;
        $this->status = $status;  
    }
  
    public function get_details() {
        $details = "Book details: \n
                '$this->title' \n
                Author: $this->author \n
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