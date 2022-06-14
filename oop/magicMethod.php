<?php

use wallet as GlobalWallet;

class wallet{
    public float $balance = 0;
    public const bouns = 50;
    
    
    public function __construct()
    {
        $this -> add();
    }
    
    
    public function add() :void
    {
        $this-> balance += self::bouns;
    }

    public function getbalance() :float
    {
        return $this->balance;
    }

    public function deposite(float $depositeValue):void
    {
        $this-> balance += $depositeValue;
    }

    public function withdrow(float $withdrowValue):void
    {
        $this-> balance -= $withdrowValue;
    }

    public function __destruct()
    {
        echo "Hello<br>";
    }
}

class test{
    public function __construct($massage)
    {
        echo "<br> hello construct $massage";
    }
    public function __destruct() {
        echo "<br>destruct test<br>";
       
    }
}

// echo wallet::bouns;
$obj = new wallet;
echo $obj -> getbalance();
echo '<br>test';

$obj2 = new test('prameter');


