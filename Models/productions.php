<?php
require_once __DIR__ . "/Genre.php";
class Production{
    public $title;
    public $language;
    public $vote;
    public $genre;
    public function __construct($title, $language, $vote, Genre $genre){
 
     $this->title = $title;
     $this->language = $language;
     $this->vote = $vote;
     $this->genre = $genre;
   }
   
 }