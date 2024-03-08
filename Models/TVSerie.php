<?php
require_once __DIR__ . "/../db.php";

class TVSerie extends Production{
    public $seasons;

    public function __construct(string $title,string $language, int $vote,Genre $genre,int $seasons){
        parent::__construct($title, $language, $vote, $genre);
        $this->seasons =$seasons;
    }
}