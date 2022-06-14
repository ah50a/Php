<?php

use person as GlobalPerson;

abstract class person{
    public $id;
    public $name;
    public $email;
    public $password;
    public $gender;
    public $phone;

    #show nesessary information && hide unnesessary information
    public abstract function login();
    public abstract function forgetPass();
    
}

#user login by email and password and change pass by email
class user extends GlobalPerson{

    public function login()
    {
        echo 'Email & password';
    }
    public function forgetPass()
    {
        echo 'Email';
    }

    public function logout(){
        echo 'logout';
    }
}

#admin login by phone and password and change pass by pone

class admin extends GlobalPerson{
    
    public function login()
    {
        echo 'phone & password';
    }
    public function forgetPass()
    {
        echo 'phone';
    }
}






