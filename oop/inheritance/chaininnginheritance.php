<?php

use person as GlobalPerson;

class person{
    public $id;
    public $name;
}

class user extends person{
    public $email;
    public $password;
}

class admin extends user{
    
}