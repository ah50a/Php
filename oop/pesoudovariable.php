<?php 
// $this تشير للأوبجيكت اللي عملها استدعاء بكل محتوياته 
class mobile{
    public $brand;
    public $color;

    public function callingMobile(){
        return "Welcome Form ($this->color) ($this->brand) <br>";
    }

    public function printMassage(){
        echo $this -> callingMobile();
    }
}

$samsung = new mobile;
$samsung->brand = 'samsunng';
$samsung->color = 'red';

 $samsung->printMassage();
//////
$apple = new mobile;
$apple->brand = 'apple';
$apple->color = 'black';

$apple->printMassage();

