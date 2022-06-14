<?php 

class wallet{
    public float $balance = 0;
    public const bouns = 50;
    
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
}

$newUser = new wallet;
echo $newUser->getbalance();
echo "<br>";
 $newUser->add();

 echo $newUser->getbalance();
 echo "<br>";
 $newUser->deposite(50);

echo $newUser->getbalance();
echo "<br>";
 $newUser->withdrow(100);

echo $newUser->getbalance();