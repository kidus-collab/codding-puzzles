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