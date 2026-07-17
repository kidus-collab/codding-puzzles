<?php

declare(strict_types=1);

/* 
   * So what expected of me is to find max joltage from the batteries on problem txt 
   * First parse / input the data 
   * Apply dsa or func for the sum and detection 

*/

// Read input form file 
$input = file_get_contents('problem.txt'); 

// Split the input into an array of lines 
$Bank = explode("\n" , $input);
$Bank = array_filter(array_map('trim', $Bank));
$totalOutputJoltage = 0; 
// print_r($Bank); 

foreach ($Bank as $battery) { 
   $bank = trim($battery);
   $maxBankjoltage = 0; 
   $len = strlen($battery); 
   
   // outer loop select first battery in each bank  
 for($i = 0; $i < len-1 ; $i++) {  
    for($j= $i + 1; $j < $len ; $j++){
         $joltage=(int)($battery[i] . $battery[j]);

         if($joltage > $maxBankjoltage) { 
              $maxBankjoltage = $joltage; 
         }

         /* 
           quick ref: $len = strnlen($battery) means total length of strings in the battery.
             How this works : 
   [8] => 5647566942478436876464969445631974775545947778858663954749446977584553756576839855679547564255237657
                example one line 
                outer loop : selects 5 
                then inner loop selects 56 , 54 , 57 , 55 , 56 , 56 , 59 , 54 , 52 ... 
                then $joltage = 56 
                then if condition works like 
                  56 > 0 ; max joltage initalization 
                  54 > 56 ; No 
                  57 > 56 ; yes ...So on till it finds the max 
         */
    }
 }

     $totalOutputJoltage += $maxBankjoltage; 
}

echo "Total output joltage is :" . $totalOutputJoltage . PHP_EOL;