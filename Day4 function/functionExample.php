<?php
// function add($number1 , $number2 , $number3){
//    return $number1 +$number2 +$number3;
// }

// $res = add(5,3,1);

// if ($res>10) {
//     # code...
//     echo 'big number';
// }else{
//     echo 'small number';
// }

// for ($i=0; $i < $res ; $i++) { 
//     # code...
//     echo 'hello <br>';
// }


// function add($number1 , $number2 = 0 , $number3=0){
//     return $number1 +$number2 +$number3;
//  }
//  echo add(1 , 2 , 3);

//  function multiply($number1 = 1 , $number2 = 1 , $number3=1){
//     return $number1 *$number2 *$number3;
//  }
//  echo multiply(1 , 2 , 3);


// function printFullname($firstname ,  $lastname , $middlename =""){
//         echo "$firstname  $middlename  $lastname";
// }
//  printFullname("ahmed" , "shalaby");

function printFullname($lastname, $firstname = "*",  $middlename = "*")
{
        echo "$firstname  $middlename  $lastname";
}
printFullname(firstname:'ahmed' , middlename:'ali' , lastname:'shalaby');
