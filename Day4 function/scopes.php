<?php
# Global var
// $x =5;

//local scope
#function
#class
#interface
#treat

//examples
// $number = 5;
// function incNum($number){
//     echo ++$number;
// }
// incNum($number);
$number = 10;
// function refrance($number){
//     echo ++$number;
// }
// refrance($number);

// function refrance(){
//     global $number;
//     echo  ++$number . '<br>';
// }
//  refrance();
//  echo $number;

function refrance(&$number){
    
    echo  ++$number . '<br>';
}
refrance($number);