<?php

require_once "item.class.php";

class Book extends Item {
    private $author;
    private static $Books = array();

    public function __construct($title, $author, $language, $genre, $location, $loanLength, $status) {
        $this->title = $title;
        $this->author = $author; 
        $this->language = $language;
        $this->genre = $genre;
        $this->location = $location;
        $this->loanLength = 3;
        $this->status = $this->setStatus($status);
        self::$Books[] = $this;
    }
 
    //would the 'use updatingStatusTrait' now overide this - The below may not need to be in the class now?
    
    
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
    
    public function addNew($bookID, $title, $author, $language, $genre, $location, $loanLength, $status) {
        $bookID = New Book();
    }
     
    public function searchByAuthor($search) {
            foreach (Book::$Books as $book) {
                $strstr = strstr(strtolower($book->author),strtolower($search));
                if (empty($strstr) !== TRUE) {
                    $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                    echo $searchResult;
         }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }  
        
    public function searchByTitle($search) {
            foreach (Book::$Books as $book) {
                $strstr = strstr(strtolower($book->title),strtolower($search));
                if (empty($strstr) !== TRUE) {
                    $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                    echo $searchResult;
         }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }  
              
    public function searchByLanguage($search) {
            foreach (Book::$Books as $book) {
                $strstr = strstr(strtolower($book->language),strtolower($search));
                if (empty($strstr) !== TRUE) {
                    $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                    echo $searchResult;
         }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }       
        
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
        
    public function searchByStatus($search){       
        if ($search == "On shelf" OR $search == "On loan" OR $search == "No longer available") {
            foreach (Book::$Books as $book) {
            $strstr = strstr(strtolower($book->status),strtolower($search));
                if (empty($strstr) !== TRUE) {
                  $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                  echo $searchResult;                 
                } 
            }  
        } else {
            die(" Fatal error: Invalid Status");
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
