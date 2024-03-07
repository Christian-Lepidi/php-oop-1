<?php
require_once __DIR__ ."/Models/Productions.php";
require_once __DIR__ ."/Models/Genre.php";

$letal_wheapon = new Production(" Letal Wheapon"," English", 7,new Genre("action","shooting"));



$the_lord_of_the_ring = new Production(" The Lord of the Ring"," English", 9, new Genre("fantasy","magic world"));

$true_detective = new Production(" True Detective","English", 7.5,new Genre("thriller","mysteries and murders"));


$productions = [
  $letal_wheapon,
  $the_lord_of_the_ring,
  $true_detective,
];