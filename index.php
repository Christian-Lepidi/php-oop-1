<?php 

require_once __DIR__."/Models/Productions.php";
require_once __DIR__."/db.php";


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
    <li><b>GENERE:</b><?php echo $production->genre->name?></li>
    <li><b>DESCRIZIONE:</b><?php echo $production->genre->description?></li>
    <?php if($production instanceof Movie): ?>
     <li><b>PROFITTI:</b><?php echo $production->profits?></li>
     <li><b>DURATA:</b><?php echo $production->duration?></li>  
    <?php endif ?>
    <?php if($production instanceof TVSerie): ?>
     <li><b>STAGIONI:</b><?php echo $production->seasons?></li> 
    <?php endif ?>  
   </ul> 
  <?php endforeach; ?>  
</body>
</html>