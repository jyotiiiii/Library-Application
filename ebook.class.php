<?php
//Chloe

class Ebook extends Book {
    private $fileSize;
    private $format = "PDF";
    
    public function __construct($title,$author,$language,$genre,$location,$status, $fileSize, $format) {
    book::__construct($title,$author,$language,$genre,$location,$status); 
    $this->filesize = $fileSize;
    $this->format = $format;
    }
    
    public function get_details() {
        $details = "Ebook details: \n
                '$this->title' \n
                Format: $this->format \n
                Author: $this->author \n
                Language: $this->language \n
                Genre: $this->genre \n
                Status: $this->status \n
                Location: $this->location";
        echo $details;
    }
    
    public function set_fileSize ($newfileSize) {
      $this->fileSize = $newfileSize;
    }
    
    private function get_fileSize(){
        return $this->fileSize;
    }
    
    public function get_format() {
        return $this->format;
    }
}
