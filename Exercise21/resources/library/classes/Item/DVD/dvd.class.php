<?php

require_once "item.class.php";

class DVD extends Item{
    private $director;
    private $releaseDate;

    public function __construct($title, $director, $releaseDate, $language, $genre, $location, $loanLength, $status) {
        $this->title = $title;
        $this->director = $director; 
        $this->releaseDate = $releaseDate;
        $this->language = $language;
        $this->genre = $genre;
        $this->location = $location;
        $this->loanLength = 1;
        $this->status = $this->setStatus($status);
        self::$DVDs[] = $this;
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
        $details = "DVD details: \n
           '$this->title' \n
            Director: $this->director \n
            Language: $this->language \n
            Genre: $this->genre \n
            Status: $this->status \n
            Location: $this->location \n";
        echo $details;
    }
    
    public function addNew($DVDID, $title, $director, $releaseDate, $language, $genre, $location, $loanLength, $status) {
        $bookID = New Book();
    }
     
    public function searchByDirector($search) {
            foreach (DVD::$DVDs as $DVD) {
                $strstr = strstr(strtolower($DVD->director),strtolower($search));
                if (empty($strstr) !== TRUE) {
                    $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                    echo $searchResult;
         }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }  
        
    public function searchByTitle($title) {
            foreach (DVD::$DVDs as $DVD) {
                $strstr = strstr(strtolower($book->title),strtolower($search));
                if (empty($strstr) !== TRUE) {
                    $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                    echo $searchResult;
         }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }  
              
    public function searchByLanguage($language) {
            foreach (DVD::$DVDs as $DVD) {
                $strstr = strstr(strtolower($book->language),strtolower($search));
                if (empty($strstr) !== TRUE) {
                    $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                    echo $searchResult;
         }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }       
        
    public function searchByGenre($genre) {
        public function searchByGenre($search) {
            foreach (DVD::$DVDs as $DVD) {
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
            foreach (DVD::$DVDs as $DVD) {
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
            foreach (DVD::$DVDs as $DVD) {
            $strstr = strstr(strtolower($book->title),strtolower($search));
            if (empty($strstr) !== TRUE && $book->status == "On shelf") {
                  $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                  echo $searchResult;
            }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }  
        
    public function searchByAvailableByDirector($search) {
            foreach (DVD::$DVDs as $DVD) {
            $strstr = strstr(strtolower($book->director),strtolower($search));
            if (empty($strstr) !== TRUE && $book->status == "On shelf") {
                  $searchResult = $book->getDetails() . PHP_EOL . PHP_EOL;
                  echo $searchResult;
            }
//            else if (empty($searchResults) === TRUE)
//               die("No titles found.");
        }
    }     
        
}
    
