<?php

#for
// for(initial counter; true||false; inc/dec counter){code}
// for ($i=2; $i <=10 ; $i+=2) { 
//     # code...
//     echo 'hello <br>' ;
// }

$users = [
    'ahmed',
    'mohamed',
    'eline',
    'sella',
    'galal',
    'samy',
    'fatma'
];


// for ($i=0; $i <=4 ; $i++) { 
//     # code...
//     echo $users[$i] . '<br>';
// }

$lastindex= count($users) -1;
// for ($i=3; $i <=$lastindex ; $i++) { 
//     # code...
//     echo $users[$i] . '<br>';
// }

// for($counter=$lastindex; $counter>=0; $counter--){
//     echo $users[$counter] . '<br>';
// }

// for ($i=0; $i <= $lastindex ; $i++) { 
//     # code...
//     if ($users[$i] == 'sella') {
//         # code...
//         echo 'sella';
//     }
// }
////////////////////////////////////////////////////////////////////////////////
#while 
/*
intial counter
while(TRUE||FALSE){
    code
    inc/dec counter
}
*/
// $counter =$lastindex;
// while ($counter >= 0) {
//     # code...
//     ecHo $users[$counter] . '<br>';
//     $counter--;
// }
/////////////////////////////////////////////////
// $counter = 0;
// while ($counter <= $lastindex) {
//     # code...
//     ecHo $users[$counter] . '<br>';
//     $counter++;
// }
////////////////////////////////////////////////////////////////////////////////

#do while

// $counter = 0;
// do {
//     # code...
//     ecHo $users[$counter] . '<br>';
//     $counter++;
// } while ($counter <= $lastindex);

// $counter = $lastindex;
// do {
//     # code...
//     ecHo $users[$counter] . '<br>';
//     $counter--;
// } while ($counter >= 0);
////////////////////////////////////////////////////////////////////////////////
// foreach ($users as $key => $value) {
//     # code...
//     echo $key . ',' . $value .'<br>';
// }

$product = [
    'code' => 5,
    'status' => true,
    'name' => 'mobile'
];

// foreach($product as $key => $value){
//     echo "$key => $value  <br>";
// }

