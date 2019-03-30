<?php

require_once "item.class.php";

class Book extends Item {
    private $author;
    private static $Books = array();

    
    public function __construct($title, $author, $language, $genre, $location, $loanLength, $location, $status) {
        $this->title = $title;
        $this->author = $author; 
        $this->language = $language;
        $this->genre = $genre;
        $this->location = $location;
        $this->status = $this->setStatus($status);
        self::$Books[] = $this;
    }
            
    public function setStatus ($status) {
        if ($status == "On shelf" OR $status =="On loan" OR $status == "No longer available") {
            $this->status = $status;
        } else { 
            die(" Fatal error: Invalid Status");
        }
        return $status;
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
    
    public function addNew($bookID, $title, $author, $language, $genre, $location, $loanLength, $location, $status) {
        $bookID = New Book();
    }
     
    public function searchByAuthor($search) {
        
        
    public function searchByTitle($title) {
      
        
    public function searchByLanguage($language) {
       
        
    public function searchByGenre($genre) {
        public function searchByGenre($search) {
            foreach (Book::$Books as $book) {
                $strstr = strstr(strtolower($book->genre),strtolower($search));
                if (empty($strstr) !== TRUE) {
                    $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                    echo $searchResult;
         }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }  
        
    public function searchByStatus($status) {        
        if ($status !== "On shelf" OR $status !== "On loan" OR $status !== "No longer available") {
            die(" Fatal error: Invalid Status");
        } else {
            foreach (Book::$Books as $book) {
            $strstr = strstr(strtolower($book->status),strtolower($search));
            if (empty($strstr) !== TRUE) {
                  $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                  echo $searchResult;
            }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    } 
    public function searchAvailableByTitle($search) {
        foreach (Book::$Books as $book) {
            $strstr = strstr(strtolower($book->title),strtolower($search));
            if (empty($strstr) !== TRUE && $book->status == "On shelf") {
                  $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                  echo $searchResult;
            }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }  
        
    public function searchByAvailableByAuthor($search) {
        foreach (Book::$Books as $book) {
            $strstr = strstr(strtolower($book->author),strtolower($search));
            if (empty($strstr) !== TRUE && $book->status == "On shelf") {
                  $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                  echo $searchResult;
            }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }     
        
}
