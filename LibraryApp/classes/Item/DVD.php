<?php
namespace classes\Item;
include_once 'Interfaces.php';
$newPath = dirname(__DIR__) . DIRECTORY_SEPARATOR ;
set_include_path(get_include_path() . PATH_SEPARATOR . $newPath);
include_once 'Item.php';
use classes\Item;

class DVD extends Item implements \Search {
    private $director;
    private $releaseYear ;
    private static $DVDs = array();

    public function __construct($title, $director, $releaseYear, $language, $genre, $location, $status) {
        $this->title = $title;
        $this->director = $director; 
        $this->releaseYear = $releaseYear;
        $this->language = $language;
        $this->genre = $genre;
        $this->location = $location;
        $this->loanLength = 1;
        $this->status = $this->setStatus($status);
        self::$DVDs[] = $this;
    }
    
    public function getSearchDetails () {
        $searchDetails = "$this->title, by $this->director, $this->status";
        echo $searchDetails;
    }
    
    public function getDetails() {
        $details = "DVD details:" . "<BR>" .
            $this->title . "<BR>" .
            "Director: $this->director" . "<BR>" .
            "Year released: $this->releaseYear" . "<BR>" .
            "Language: $this->language" . "<BR>" .
            "Genre: $this->genre" . "<BR>" . 
            "Status: $this->status" . "<BR>" .
            "Location: $this->location" . "<BR>" . "<BR>";
        echo $details;
    }
        
    public function searchByDirector(string $search) {
        echo "Search Results: by Director - $search <br>";
        foreach (DVD::$DVDs as $DVD) {
            $strstr = strstr(strtolower($DVD->director),strtolower($search));
            if (empty($strstr) !== TRUE) {
                $searchResult = $DVD->getSearchDetails() . "<BR>" . "<BR>";
                echo $searchResult;
            }
        }
    }
        
    public function searchByTitle(string $search) {
        echo "Search Results: by Title - $search <br>";
         foreach (DVD::$DVDs as $DVD) {
            $strstr = strstr(strtolower($DVD->title),strtolower($search));
            if (empty($strstr) !== TRUE) {
                $searchResult = $DVD->getSearchDetails() . "<BR>" . "<BR>";
                echo $searchResult;
            }
        }
    }  
              
    public function searchByLanguage(string $search) {
        echo "Search Results: by Language - $search <br>";
        foreach (DVD::$DVDs as $DVD) {
            $strstr = strstr(strtolower($DVD->language),strtolower($search));
            if (empty($strstr) !== TRUE) {
                $searchResult = $DVD->getSearchDetails() . "<BR>" . "<BR>";
                echo $searchResult;
            }
        }
    }
         
    public function searchByGenre(string $search) {
        echo "Search Results: by Genre - $search <br>";
        foreach (DVD::$DVDs as $DVD) {
            $strstr = strstr(strtolower($DVD>genre),strtolower($search));
            if (empty($strstr) !== TRUE) {
                $searchResult = $DVD->getSearchDetails() . "<BR>" . "<BR>";
                echo $searchResult;
            }
        }
    }
        
    public function searchByStatus(string $search){       
        echo "Search Results: by Status - $search <br>";
        if ($search == "On shelf" OR $search == "On loan" OR $search == "No longer available") {
            foreach (DVD::$DVDs as $DVD) {
            $strstr = strstr(strtolower($DVD->status),strtolower($search));
                if (empty($strstr) !== TRUE) {
                  $searchResult = $DVD->getSearchDetails() . "<BR>" . "<BR>";
                  echo $searchResult;                 
                } 
            }  
        } else {
            die(" Fatal error: Invalid Status");
        }
    }
        
    public function searchAvailableByTitle(string $search) {
        echo "Search Results: available DVDs by Title - $search <br>";
        foreach (DVD::$DVDs as $DVD) {
            $strstr = strstr(strtolower($DVD->title),strtolower($search));
            if (empty($strstr) !== TRUE && $DVD>status == "On shelf") {
                  $searchResult = $DVD->getSearchDetails() . "<BR>" . "<BR>";
                  echo $searchResult;
            }
        }
    }
        
    public function searchAvailableByDirector($search) {
        echo "Search Results: available DVDs by Director - $search <br>";
        foreach (DVD::$DVDs as $DVD) {
            $strstr = strstr(strtolower($DVD->director),strtolower($search));
            if (empty($strstr) !== TRUE && $DVD->status == "On shelf") {
                  $searchResult = $DVD->getSearchDetails() . "<BR>" . "<BR>";
                  echo $searchResult;
            }
        }
    }     
    
    public function getAllDVDs() {
         echo "Search Result: all existing DVDs <br>";
         sort(DVD::$DVDs);
         foreach (DVD::$DVDs as $DVD) {
            $searchResult = $DVD->getSearchDetails() . "<BR>" . "<BR>";
            echo $searchResult;
        }
    }
}