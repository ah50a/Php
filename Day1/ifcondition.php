<?php
$x = [];
if ($x) {
    # code...
    echo 'hello';
}
////////////////////////////////////////////////
    $order = 'edjdw';
    if ($order == 'p') {
        # code...
        $status = 'panding';
    }elseif($order == 's'){
        # code...
        $status = 'shipped';
    }elseif($order == 'w'){
        # code...
        $status = 'On My Way';
    }else{
        //100% - all
        $status = 'Delivard';
    }
    // echo $status;
////////////////////////////////////////////////
    $user_status = 'not active';
    if ($user_status == 'active') {
        # code...
        $massege = 'User is Online';
    }else {
        # code...
        $massege = 'User is Offline';
    }
    // echo $massege;
////////////////////////////////////////////////
    $temp = -1;
    if ($temp <= 0 ) {
        # code...
        $tempMassage = 'Snow Weather';
    }elseif ($temp > 0 && $temp > 15) {
        # code...
        $tempMassage = 'Cold Weather';
    }elseif ($temp >= 15 && $temp > 30) {
        # code...
        $tempMassage = 'Warm Weather';
    }else{
        $tempMassage = 'Hot Weather';
    }
    // echo $tempMassage;
////////////////////////////////////////////////
   $studentgrade = 100;
   define('MAXGRADE' , 100);
    // 0  -> 49  = f
    // 50 -> 70  = D
    // 71 -> 80  = C
    // 81 -> 90  = B
    // 91 -> 100 = A
    if ($studentgrade >= 0 && $studentgrade < (MAXGRADE/2)) {
        # code...
        $studentmassage = 'Your Grade is (F)';
    }elseif ($studentgrade >= (MAXGRADE/2) && $studentgrade < 70) {
        # code...
        $studentmassage = 'Your Grade is (D)';
    }elseif ($studentgrade >= 70 && $studentgrade < 80) {
        # code...
        $studentmassage = 'Your Grade is (C)';
    }elseif ($studentgrade >= 80 && $studentgrade < 90) {
        # code...
        $studentmassage = 'Your Grade is (B)';
    }elseif ($studentgrade >= 90 && $studentgrade <= (MAXGRADE)) {
        # code...
        $studentmassage = 'Your Grade is (A)';
    }else{
        $studentmassage = 'Please Inter Your Right Grade'; 
    }     

    // echo $studentmassage;
///////////////////////////////////////////////////////
        //ternary operator//
    $gender = 'm';
    // echo($gender == 'f' ? 'female' :'male');    
   $genderresult = $gender == 'f' ? 'female' :'male';
    // echo $genderresult;
///////////////////////////////////////////////////////
    // null operator//
    $code = null;
    // echo $code ?? 'no code';   
///////////////////////////////////////////////////////
    $person = "female";
    $salary = "500";
    # salary >100 rich , salary <= 1000 poor
    if ($salary >1000) {
        # code...
        $salarymassage = $person . ' , rich';
    }else{
        $salarymassage = $person . ' , poor';
    }
    // echo $salarymassage;

    echo  $person . ($salary > 1000 ? ' , rich' :  ' , poor');

