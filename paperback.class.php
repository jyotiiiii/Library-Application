<?php
//Rosa
//namespace Classes\Book;

class Paperback extends Book {
    private $publisher;
    private $datePublished;
    
    public function __construct($title,$author,$language,$genre,$location,$status, $publisher,$datePublished) {
        book::__construct($title,$author,$language,$genre,$location,$status); 
        $this->publisher = $publisher; 
        $this->datePublished = $datePublished; 
        
    }
  
    public function get_details() {
        $details = "Book details: \n
                '$this->title' \n
                Author: $this->author \n
                Published by: $this->publisher, $this->datePublished \n
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