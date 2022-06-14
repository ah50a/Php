<?php 

#calculate area of different shapes?

interface area{
    function area();
}

class rect implements area{
    private $hihgt , $width;

    /**
     * Get the value of hihgt
     */ 
    public function getHihgt()
    {
        return $this->hihgt;
    }

    /**
     * Set the value of hihgt
     *
     * @return  self
     */ 
    public function setHihgt($hihgt)
    {
        $this->hihgt = $hihgt;

        return $this;
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }


    public function area()
    {
        return $this->hihgt * $this->width;
    }
}

class squre implements area{

    
    public function area()
    {
        
    }
}