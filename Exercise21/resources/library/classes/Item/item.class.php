<?php

class abstract Item {
    private $title;
    private $language;
    private $genre;
    private $loanLength;
    private $location;
    private $status;
    
    public abstract function setStatus($status);
    
    public abstract function getDetails();
    
    public function borrowItem ($memberID) {
    $this->setStatus("On loan");
    echo $this->getTitle() ." has been borrowed by $memberID->firstName $memberID->lastName on " . date('d/m/Y') . "<br>"; 
    }
        
    public function returnItem ($memberID) {
    $this->setStatus("On shelf");
    echo $this->getTitle() ." has been returned by $memberID->firstName $memberID->lastName on " . date('d/m/Y') . "<br>";
    }   
    
    public function getLocation() {
        echo  $itemLocation = "The location for '$this->title' is: $this->location.";
    }    
}
