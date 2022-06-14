<?php 

class student{

    public static function getclassname()
    {
        return self::class;
        // static::class;
        // student::class;
    }

    public static function get_instance()
    {
        // return new student;
        // new self;
        // new static;
        return static::getclassname();
        
    }
}

// echo (new student)->getclassname();
// echo student::get_instance()->getclassname();
echo student::get_instance()::getclassname();