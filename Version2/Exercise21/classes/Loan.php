<?php
class Loan {
    private $itemID;
    private $memberID;
    private $startDate;
    private $dueDate;
    private $endDate;
    private $status;
    private static $Loans = array();
    public function __construct($itemID, $memberID){
        $this->itemID = $itemID;
        $this->memberID= $memberID;
        $this->startDate = date("d/m/Y");
        $this->dueDate = date("d/m/Y")+ $itemID->loanLength*7;
        $this->status = "Open";
        self::$Loans[] = $this;
    }
        
    public function setEndDate(){
        $this->endDate = date("d/m/Y");
        $this->status = "Closed";
    }
    public function loanCount($memberID) {
        $count = 0;
        foreach (self::$Loans as $loan) {
            if($loan->memberID == $memberID) {
               $count = $count ++; 
            }
        return $count;
        }       
    }
}