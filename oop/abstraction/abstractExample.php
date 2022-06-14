<?php 

abstract class animal {

    public abstract function eat();
    public abstract function drink();

    public function run()
    {
        echo 'run';
    }
    
}

class cat extends animal{

    public function eat(){
        echo 'cheese';
    }
    public function drink(){
        echo 'milk';
    }
}

class dog extends animal{

    public function eat(){
        echo 'meat';
    }
    public function drink(){
        echo 'water';
    }
}

