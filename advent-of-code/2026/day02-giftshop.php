<?php 

declare(strict_types=1); 

$input = file_get_contents("giftshopinput.txt");
 
$ranges = array_map('trim', explode('-', $input)); 
$total = 0; 

foreach ($ranges as $range) { 
  [$start , $end ] = explode('-',range);
    
  $start = (int)$start; 
  $end = (int)$end; 

  for($id = $start ; $id <= $end ; $id++) { 
      $idString = (string)$id; 
      $length = strlen($idString);

      if($length % 2 !== 0) { 
        continue; 
      }
  }
}

