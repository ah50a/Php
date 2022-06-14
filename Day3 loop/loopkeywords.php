<?php
# break => skip current loop
# countinue => skip current iteration

$users = [
    'ahmed',
    'mohamed',
    'eline',
    'sella',
    'galal',
    'samy',
    'fatma'
];

$needel = 'fatma';
$massage = 'not found';
// foreach ($users as $index => $name) {
//     # code...
//     if($needel == $name){
//         $massage = $name . ' found';
//         break;
//     }
// }
// echo $massage;

// foreach ($users as $index => $name) {
//     # code...
//     if ($index % 2 != 0) {
//         # code...
//         echo "$name <br>";
//     }
// }

foreach ($users as $index => $name) {
    # code...
    if ($index % 2 != 0) {
        # code...
        continue;
    }
    echo "$name <br>";
}
