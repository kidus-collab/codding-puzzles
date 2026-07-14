<?php 

// index array 

$ages = [10 , 20 , 30 , 40 ]; 

//$2ndarr = array('kidus' . 'meron');

$ages[] = 70; 

//$peopleThree = array_merge($2ndarr , $ages);s

// associative array 
$name = ['NAME' => 'KIDUS' , 'AGE' => '23' , 'NATIONALITY' => 'ETHIOPIA' ]; 

$name2 = array(['NAME' => 'MERON' , 'AGE' , '22' , 'NATION' => 'ETH']);
$name2['aman'] = 'red';   

$mergename = array_merge($name , $name2);

// print_r($mergename);

// multi-dimentional array 
$databse = [ ['name'=>'kidus' , 'age'=>23] , ['name'=>'meron' , 'age'=>22] , ];

foreach($databse as $data) { 
    if($data['age'] < 23) { 
        echo $data['name'] ;
    }
}

/*
$i = 0;
while($i < count($sadatabse)) { 
    echo $databse[$i]['name']['age']; 
    echo '\n'; 
    $i++; 
}
*/

/* 

for($i=0; $i < count(databse) ; $i++) { 
    echo $databse[$i]; 
}
 */



?> 

<!--

<!DOCTYPE html> 
<html> 
<head> 
 <title>PHP Practice</title> 
</head> 
<body> 
 <h1>products</h1>
 <ul>
     <li>hi</li>
</ul>

</body> 
</html> 

--> 