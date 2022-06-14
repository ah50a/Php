<?php 
//indexed array (nomaric uniqe keys) => idexed + value
$users = array('ahmed' , 'ali' , 'hassan' , 'eline' , 'sella.');
// $users = ['ahmed' , 'ali' , 'hassan' , 'eline' , 'sella.'];
// print_r($users);
$count = count($users);
$last_index = $count -1;
// print_r($last_index);
// echo $users[3] . '<br>';
$users[$last_index] = 'sella';
$users[5] = 'shimaa';
// print_r($users);

$new_array = ['ahmed' , 5 , 2.3 , '' , null , [5,5] , (object)[]];
// print_r($new_array);
//////////////////////////////////////////////////////////////////////

# associative array (string uniqe keys) => key + value

$product = [
    'code' => 5,
    'status' => true,
    'name' => 'mobile'
];
// $element = $product['name'];
$product['detailes'] = 'text';
// print_r($product);
//////////////////////////////////////////////////////////////////////////
# object (string uniqe proparity) => proparity + value
$offer = (object)[
    'id' => 23,
    'title' => 'text',
    'descount' => 0
];
// echo $offer->title .' '. $offer->id;
$offer->title = 'Buy One get One Free'; //Edit
$offer->case = true; //Add elment
print_r($offer);
