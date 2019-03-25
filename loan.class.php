<?php

class loan{
    private $bookId;
    private $memberId;
    private $loanStatus;
    private $dueDate;

public function __construct($bookId, $memberId, $loanStatus, $dueDate) {
                    $this->bookId = $bookId;
                    $this->memberId = $memberId;
                    $this->loanStatus = $loanStatus;
                    $this->dueDate = $dueDate;
}

public function get_loanDetails(){
    $loanDetails = "Book ID: $this->bookId <br>
                    Member ID: $this->memberId <br>
                    Book is due on: $this->dueDate <br>";

    echo "$loanDetails";}
   

    
    public function set_loanStatus ($newLoanStatus){
        $this->loanStatus = $newLoanStatus;
    }  

    public function get_loanStatus() {
        return $this->loanStatus;     
    }    
}