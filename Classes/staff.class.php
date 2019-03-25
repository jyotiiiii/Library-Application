<?php
//Chloe

class staff extends Person {
    public $jobTitle;
    private $salary;
    protected $startDate;
    protected $contractType;
    
    
        public function __construct($firstName, $lastName, $dob, $jobTitle, $salary, $startDate, $contractType) {
        person::__construct($firstName, $lastName, $dob);
            $this->jobTitle = $jobTitle;
            $this->salary = $salary;
            $this->startDate = $startDate;
            $this->contractType = $contractType;    
        }
        
        
        public function get_jobTitle(){
            return $this->jobTitle;
        }
        
        protected function set_contractType($newContract){
            $this->contractType = $newContract;
            echo "New contract status is: " . $newContract;
        }

}

