<?php
//Chloe

class Audiobook extends Book {
    private $artist;
    private $duration;
    private $format = "MP4";
    private $uploadDate;
    
public function __construct($title,$author,$language,$genre,$location,$status, $artist, $duration, $format, $uploadDate) {
    book::__construct($title,$author,$language,$genre,$location,$status); 
    $this->artist = $artist;
    $this->duration = $duration;
    $this->format = $format;
    $this->uploadDate = $uploadDate;
}
    
    public function get_details() {
        $details = "Audiobook details: \n
                '$this->title' \n
                Format: $this->format \n
                Author: $this->author \n
                Artist: $this->artist \n
                Language: $this->language \n
                Genre: $this->genre \n
                Status: $this->status \n
                Location: $this->location";
        echo $details;
    }

    public function set_uploadDate ($newUploadDate) {
      $this->uploadDate = $newUploadDate;
    }
    
    public function set_duration ($newDuration) {
      $this->duration = $newDuration;
    }
    
    public function set_artist ($newArtist) {
      $this->artist = $newArtist;
    }
    
    public function get_duration() {
        return $this->duration;
    }
    
    public function get_artist() {
        return $this->artist;
    }
    
    public function get_format() {
        return $this->format;
    }
    
    public function get_uploadDate(){
        return $this->uploadDate;
    }    
    
}
