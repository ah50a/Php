<?php

$count = 0;

// function counter(){
//     global $count;
//     echo ++ $count .'<br>';
// }
// counter();
// counter();
// counter();
// counter();

// function counterv2(&$count){
//     echo ++$count  .'<br>';
// }
// counterv2($count);
// counterv2($count);
// counterv2($count);
// counterv2($count);

// function counterv3($count){
//     return ++$count;
// }
// $res = counterv3($count);
// echo $res . '<br>';
// $res2 = counterv3($res);
// echo $res2;


function counterv2(){
    static $count = 0;
   echo ++$count  .'<br>';
}

counterv2();
counterv2();
counterv2();
