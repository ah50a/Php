<?php
// $array = [
//     [
//         'id' => 5698,
//         'first_name' => 'Peter',
//         'last_name' => 'Griffin',
//     ]
// ];

// $first_name = array_column($array, 'first_name');
// // print_r($first_name);

// $fname=array("Peter","Ben","Joe");
// $age=array("35","37","43");

// $array_combine = array_combine($fname , $age);
// print_r($array_combine);

#math
// $num = 6.9;
// echo round($num  , 0, PHP_ROUND_HALF_EVEN);

// echo rand(10000 , 99999);
///////////////////////////////////////////////////////////////
$users = array('ahmed' , 'fatma' , 'mohamed', 'sella');
array_push($users , 'gana');
array_unshift($users ,'ali');
array_splice($users , 2 ,1 , 'eline' );
// print_r($users);

//////
// if (in_array('fatma' , $users)) {
//     # code...
//     echo 'true';
// }else{
//     echo 'false';
// }

//  echo array_search('ali',$users);
/////

// $students = ['ahmed' , 'mohamed' , 'ali' , 'eslam'];
// foreach ($students as $index => $student) {
//     # code...
//     echo $student;
//     if ($index != count($students) -1) {
//         # code...
//         echo ',';
//     }
//     echo '<br>';
// }

// echo implode(' , ' , $students) ;
// $str = 'hello world , its a good day';
// print_r(explode( ',' ,$str));
////////////////

$msg = 'weLcome tO nTi';
//  echo ucfirst($msg);


#hash

// $password = 123456789;
// echo sha1($password) . '<br>';
// echo md5($password);
// echo '<br>';
// echo password_hash($password , PASSWORD_BCRYPT);

#Date

 echo time();
 echo '<br>';

echo date('d-m-Y h:i:s A' , strtotime('+1 month'));


