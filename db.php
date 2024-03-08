<?php
require_once __DIR__ ."/Models/Productions.php";
require_once __DIR__ ."/Models/Genre.php";
require_once __DIR__ ."/Models/Movie.php";
require_once __DIR__ ."/Models/TVSerie.php";

$letal_wheapon = new Movie(" Letal Wheapon"," English", 7,new Genre("action","shooting"));

$the_lord_of_the_ring = new Movie(" The Lord of the Ring"," English", 9, new Genre("fantasy","magic world"));

$true_detective = new TVSerie(" True Detective","English", 7.5,new Genre("thriller","mysteries and murders"));


$productions = [
  $letal_wheapon,
  $the_lord_of_the_ring,
  $true_detective,
];