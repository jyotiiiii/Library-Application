<?php
//Rosa
//namespace Classes\Book;
require_once "item.class.php";

class Book extends Item {
    private $author;
    
        public function __construct($title, $author, $language, $genre, $location, $loanLength, $location, $status) {
        item::__construct($title, $language, $genre, $location, $loanLength, $location, $status);
            $this->author = $author; 
}
        public function get_details() {
        $details = "Book details: \n
                '$this->title' \n
                Author: $this->author \n
                Language: $this->language \n
                Genre: $this->genre \n
                Status: $this->status \n
                Location: $this->location \n";
        echo $details;
    }
    
        public function setStatus ($status) {
        if ($status == "On shelf") {
            $this->status = $status;
        } else if ($status == "On loan") {
            $this->status = $status;
        } else if ($status == "No longer available") {
            $this->status = $status;
        } else { 
            die(" Fatal error: Invalid Value");
        }
        return $status;
    }

    public function borrowBook ($memberID) {
    $this->setStatus("On loan");
    echo $this->getTitle() ." has been borrowed by $memberID->firstName $memberID->lastName on " . date('d/m/Y') . "<br>"; 
    }
        
    public function returnBook ($memberID) {
    $this->setStatus("On shelf");
    echo $this->getTitle() ." has been returned by $memberID->firstName $memberID->lastName on " . date('d/m/Y') . "<br>";
    }   
}
