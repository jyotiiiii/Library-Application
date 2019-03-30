<?php

require_once "item.class.php";

class Book extends Item {
    private $author;
    
        public function __construct($title, $author, $language, $genre, $location, $loanLength, $location, $status) {
            $this->title = $title;
            $this->author = $author; 
            $this->language = $language;
            $this->genre = $genre;
            $this->location = $location;
            $this->status = $this->setStatus($status);
}
    
        public function getDetails() {
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


}
