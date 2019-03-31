<?php
interface Search {
    public function searchByTitle(string $search); 
    public function searchByLanguage(string $search);    
    public function searchByGenre(string $search);
    public function searchByStatus(string $search);
    public function searchAvailableByTitle(string $earch);
}