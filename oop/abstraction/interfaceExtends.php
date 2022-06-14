<?php 

interface unflyablebird{
    function eat();
    function drink();
}

interface flyablebird extends unflyablebird{
    function fly();
}


class chicken implements unflyablebird{
    public function eat()
    {
        echo "eat rice";
    }

    public function drink()
    {
        echo "drink water";
    }
}

class duck implements flyablebird{
    public function eat()
    {
        echo "eat rice";
    }

    public function drink()
    {
        echo "drink water";
    }
    public function fly()
    {
        echo "true";
    }
}