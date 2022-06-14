<?php 

class contract{
    public $contractDate = '20-4-2020';
    public $startDate;
    public $endDte;
    public $salary;
    public $name;
    public $position;
    public $positionType;
    public $encurance = true;

    public function getemplyee(){
        print_r($this->name) ; // peaoudo variable (refere to current object in side class) جوه الكلاس object بتحل محل ال  
    }
}
//first inistance
$firstemplyee = new contract;
$firstemplyee -> startDate = '25-4-2020';
$firstemplyee -> endDte = '25-4-2023';
$firstemplyee -> salary = 5000;
$firstemplyee -> name = 'Ahmed';
$firstemplyee -> position = 'backend';
$firstemplyee -> positionType = 'fullTime';

$firstemplyee -> getemplyee(); //output => ahmed
// print_r($firstemplyee);

//second inistance
$secondemplyee = new contract;
$secondemplyee -> startDate = '25-7-2022';
$secondemplyee -> endDte = '25-7-2025';
$secondemplyee -> salary = 5000;
$secondemplyee -> name = 'Ahmed';
$secondemplyee -> position = 'frontend';
$secondemplyee -> positionType = 'fullTime';
$secondemplyee -> bouns = '2';

// print_r($secondemplyee);

//third inistance
$thirdemplyee = new contract;
$thirdemplyee -> startDate = '25-7-2022';
$thirdemplyee -> endDte = '25-7-2025';
$thirdemplyee -> salary = 5000;
$thirdemplyee -> name = 'Ahmed';
$thirdemplyee -> position = 'frontend';
$thirdemplyee -> positionType = 'fullTime';
$thirdemplyee -> bouns = '3';
$thirdemplyee -> encurance = false;

// print_r($thirdemplyee);

