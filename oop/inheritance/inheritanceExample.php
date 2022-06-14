<?php 

class person{
    public $id;
    public $name;
    public $email;
    public $password;
    public const persontype = 'client';
    public function login(){
        echo "login(email & password) <br>";
    }
    public function logout(){
        echo "logout(email & password) <br>";
    }
}

class user extends person{

}

class seller extends person{
    public $phone;
    public $nationalId;
    public $productType;

    public function login()
    {
        echo "login (phone & password)<br>";
    }
}
// (new user)->login();

// $seller = new seller;
// $seller -> login();

// print_r(new user);
// print_r(new seller);

class admin extends person{
    public const persontype = 'admin';
    
    public function getpersontype() {
       return self::persontype;
    }
}

echo (new admin)-> getpersontype();

// echo person :: persontype;