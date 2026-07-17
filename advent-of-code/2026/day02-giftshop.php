<?php 

declare(strict_types=1); 

$input = file_get_contents("giftshopinput.txt");


$ids = explode('-', $input); 
$idarr = array_map('intval',$ids); 

foreach ($idarr as $id) { 
    print_r($id . PHP_EOL);
}