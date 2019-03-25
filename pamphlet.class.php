<?php
//Chloe

class Pamphlet extends Book {
    private $artist;
    private $editor;
    private $format = "JPEG/JPG";
    
    public function __construct($title,$author,$language,$genre,$location,$status, $artist, $editor, $format) {
    book::__construct($title,$author,$language,$genre,$location,$status); 
    $this->artist = $artist; 
    $this->editor = $editor;
    $this->format = $format;
    }
    
    public function get_details() {
        $details = "Pamphlet details: \n
                '$this->title' \n
                Format: $this->format \n
                Published by: $this->publisher, $this->datePublished \n
                Language: $this->language \n
                Genre: $this->genre \n
                Status: $this->status \n
                Location: $this->location";
        echo $details;
    }
    
    public function set_artist ($newArtist) {
      $this->artist = $newArtist;
    }
    
    public function set_editor($newEditor) {
        $this->editor = $newEditor;
    }
    
    private function get_artist(){
        return $this->artist;
    }
    
    public function get_editor(){
        return $this->editor;
    }
    
   public function get_format() {
        return $this->format;
    }

}