<?php

namespace classes\Item;
//var_dump(stream_resolve_include_path("Interfaces.php"));

include_once 'C:\xampp\htdocs\Exercise21\public_html\php\Interfaces.php';


$newPath = dirname(__DIR__) . DIRECTORY_SEPARATOR ;
set_include_path(get_include_path() . PATH_SEPARATOR . $newPath);
include_once 'Item.php';
use classes\Item;
class Book extends Item implements \Search {
    private $author;
    private static $Books = array();
    public function __construct($title, $author, $language, $genre, $location, $status) {
        $this->title = $title;
        $this->author = $author; 
        $this->language = $language;
        $this->genre = $genre;
        $this->location = $location;
        $this->loanLength = 3;
        $this->status = $this->setStatus($status);
        self::$Books[] = $this;
    }   
     
    public function getDetails() {
        $details = "Book details:". "<BR>" . 
            $this->title . "<BR>" .
            "Author: $this->author" . "<BR>" . 
            "Language: $this->language" . "<BR>" . 
            "Genre: $this->genre" . "<BR>" . 
            "Status: $this->status" . "<BR>" .
            "Location: $this->location" . "<BR>" ;
        echo $details;
    }
    
    public function getSearchDetails () {
        $searchDetails = "$this->title, by $this->author, $this->status";
        echo $searchDetails;
    }
            
    public function searchByAuthor(string $search) {
        echo "Search Results: by Author - $search<br>";
        foreach (Book::$Books as $book) {
            $strstr = strstr(strtolower($book->author),strtolower($search));
            if (empty($strstr) !== TRUE) {
                    $searchResult = $book->getSearchDetails() . "<BR>" . "<BR>";
                    echo $searchResult;
            }
        }
        if (strstr(strtolower(Book::$Books),strtolower($search)) == FALSE) {
            die("No titles found.");
        }
    }
    
    public function searchByTitle(string $search) {
        echo "Search Results: by Title - $search<br>";
        foreach (Book::$Books as $book) {
            $strstr = strstr(strtolower($book->title),strtolower($search));
            if (empty($strstr) !== TRUE) {
                $searchResult = $book->getSearchDetails() . "<BR>" . "<BR>";
                echo $searchResult;
            }
        }
    }  
              
    public function searchByLanguage(string $search) {
        echo "Search Results: by Language - $search <br>";
        foreach (Book::$Books as $book) {
                $strstr = strstr(strtolower($book->language),strtolower($search));
                if (empty($strstr) !== TRUE) {
                    $searchResult = $book->getSearchDetails() . "<BR>" . "<BR>";
                    echo $searchResult;
               }
            }
            if (strstr(strtolower(Book::$Books),strtolower($search)) == FALSE) {
                die("No titles found.");
            }
    }     
        
    public function searchByGenre(string $search) {
        echo "Search Results: by Genre - $search<br>";
        foreach (Book::$Books as $book) {
            $strstr = strstr(strtolower($book->genre),strtolower($search));
            if (empty($strstr) !== TRUE) {
                $searchResult = $book->getSearchDetails() . "<BR>" . "<BR>";
                echo $searchResult;
            }
        }
    }
    
    public function searchByStatus(string $search){       
        echo "Search Results: by Status - $search<br>";
        if ($search == "On shelf" OR $search == "On loan" OR $search == "No longer available") {
            foreach (Book::$Books as $book) {
            $strstr = strstr(strtolower($book->status),strtolower($search));
                if (empty($strstr) !== TRUE) {
                  $searchResult = $book->getSearchDetails() . "<BR>" . "<BR>";
                  echo $searchResult;                 
                } 
            }  
        } else {
            die(" Fatal error: Invalid Status");
        }
    }
        
    public function searchAvailableByTitle(string $search) {
        echo "Search Results: available books by Title - $search <br>";
        foreach (Book::$Books as $book) {
            $strstr = strstr(strtolower($book->title),strtolower($search));
            if (empty($strstr) !== TRUE && $book->status == "On shelf") {
                  $searchResult = $book->getSearchDetails() . "<BR>" . "<BR>";
                  echo $searchResult;
            }
        }
    }  
        
    public function searchAvailableByAuthor(string $search) {
        echo "Search Results: available books by Author - $search <br>";
        foreach (Book::$Books as $book) {
            $strstr = strstr(strtolower($book->author),strtolower($search));
            if (empty($strstr) !== TRUE && $book->status == "On shelf") {
                  $searchResult = $book->getSearchDetails() . "<BR>" . "<BR>";
                  echo $searchResult;
            }
        }    
    }
    
    public function getAllBooks() {
        echo "Search Result: all existing books <br>";
        sort(Book::$Books);
            foreach (Book::$Books as $book) {
            $searchResult = $book->getSearchDetails() . "<BR>" . "<BR>";
            echo $searchResult;
        }
    }
}