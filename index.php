<?php 

class Production{
   public $title;
   public $language;
   public $vote;
   public function __construct($title, $language, $vote){

    $this->title = $title;
    $this->language = $language;
    $this->vote = $vote;
  }
  public function getText(){
    return (string)$this->title."".$this->language."".$this->vote."";
  }
}

$letal_wheapon = new Production("Letal Wheapon"," English"," 7");
echo $letal_wheapon->getText();


$the_lord_of_the_ring = new Production(" The Lord of the Ring"," English"," 9");
echo $the_lord_of_the_ring->getText();
