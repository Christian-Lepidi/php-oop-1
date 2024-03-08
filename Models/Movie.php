<?php
require_once __DIR__ . "/../db.php";

class Movie extends Production {
    public $profits;
    public $duration;

    public function __construct(string $title,string $language, int $vote, Genre $genre,string $profits, string $duration) {
       
       parent::__construct( $title, $language,$vote, $genre);
       
       $this->profits = $profits;
       $this->duration = $duration;
    }
    
}