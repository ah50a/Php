<?php
// switch ($variable) {
//     case 'value':
//         # code...
//         break;
    
//     default:
//         # code...
//         break;
// } 

    $studentgrade = 49;
    define('MAXGRADE' , 100);

    switch($studentgrade){
        case $studentgrade >= (MAXGRADE/2) && $studentgrade <= (MAXGRADE) :
            # code...
            $studentmassage = 'YOU ARE PASS';
            break;
        case $studentgrade <= (MAXGRADE/2) && $studentgrade >= 0:
            # code...
            $studentmassage = 'YOU ARE FAILED';
            break; 
        default:
            # code...
            $studentmassage = 'Please Inter A Valid Grade';       
    }
    echo $studentmassage;
    