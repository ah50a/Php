<?php
$myfriends = ["Ahmed", 20, 10, "Sayed", "Ali", "Shimaa", "ibrahim", "Noha"];

foreach ($myfriends as $index => $value) {
    # code...
    // echo gettype($value). '<br>'; 
    if (gettype($value) == 'string' && $value == ucfirst($value)) {
        # code...
        echo $value . '<br>';
    }
}