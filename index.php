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
}

$letal_wheapon = new Production("Letal Wheapon"," English"," 7");
echo $letal_wheapon->title;
echo $letal_wheapon->language;
echo $letal_wheapon->vote;

$the_lord_of_the_ring = new Production(" The Lord of the Ring"," English"," 9");
echo $the_lord_of_the_ring->title;
echo $the_lord_of_the_ring->language;
echo $the_lord_of_the_ring->vote;
