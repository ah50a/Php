<?php 

class mobile{
    public $name;
    public $color;
    public $price;
    public $ram;
    public $charger;
    public $bettery;
    public static $madeIn ='china<br>';
    public const version = '1.0';
}

class samsung extends mobile {
    public $screenfingerprint = true;
}

class apple extends mobile {
    public $faceId = true;
}

$samsung = new samsung;
$apple = new apple;
// print_r($samsung);
// print_r($apple);

echo samsung::$madeIn;
echo apple::$madeIn;