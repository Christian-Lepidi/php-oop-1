<?php 

require_once __DIR__."/Models/productions.php";
require_once __DIR__."/Models/db.php";


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