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

    
}