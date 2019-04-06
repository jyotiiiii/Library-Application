<?php

namespace classes;
include_once 'C:\xampp\htdocs\Exercise21\php\updatingStatusTrait.php';


    abstract class Item {
    protected $title;
    private $language;
    private $genre;
    private $loanLength;
    private $location;
    protected $status;
       
    use \updatingStatusTrait;
    public abstract function getDetails();
    public abstract function getSearchDetails();
       
    public function borrowItem ($memberID) {
        if ($this->status == "on shelf") {
        echo $this->title . " has been borrowed by " . $memberID->fullName() . " on " . date('d/m/Y') . "<br>"; 
        $this->setStatus("on loan");
        } else {
            die("Item not currently available");
        }
    }
         
    public function returnItem () {
        $this->setStatus("On shelf");
        echo $this->title ." has been returned on " . date('d/m/Y') . "<br>";
    }   
    
    public function getLocation() {
        echo  $itemLocation = "The location for '$this->title' is: $this->location.";
    }    
}
