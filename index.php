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
    return (string)$this->title. $this->language. $this->vote."";
  }
}

$letal_wheapon = new Production(" Letal Wheapon"," English", 7);



$the_lord_of_the_ring = new Production(" The Lord of the Ring"," English", 9);

$true_detective = new Production(" True Detective","English", 7.5);


$productions = [
  $letal_wheapon,
  $the_lord_of_the_ring,
  $true_detective,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productions</title>
</head>
<body>
  <?php foreach($productions as $production): ?>
   <ul>
    <li><b>TITOLO:</b><?php echo $production->title?></li>
    <li><b>LINGUA:</b><?php echo $production->language?></li>
    <li><b>VOTO:</b><?php echo $production->vote?></li>
   </ul> 
  <?php endforeach; ?>  
</body>
</html>