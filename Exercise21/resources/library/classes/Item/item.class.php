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
    
    public abstract function borrowItem($member);
    
    public abstract function returnItem($member);
    
    public function getLocation() {
        echo  $itemLocation = "The location for '$this->title' is: $this->location.";
    }    
}
