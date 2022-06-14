<?php 

class user{
    public const bouns =50; // ده بيشير للكلاس الأوبجيكت ميقدرش يعدل عليه
    public static $status = 'active';


    //////////////
    public $name = 'ahmed';

    public function login()
    {
        echo "login <br>";
    }

    //////////////////
    public static function logout()
    {
        echo "logout <br>";
    }
}

// access const from class
//scope reasluation operator ::
echo user::bouns; 
echo "<br>";
echo user::$status;
echo "<br>";
user::logout();

//access object ->
$call= new user;
$call ->name;
$call -> login();
