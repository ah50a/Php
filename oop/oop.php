<?php
//oop => style of coding to group simialar tasking
/*oop: معتمد على
class: blueprint which group similar tasks to organize application structure
object: inistance to access class scope (local scope) in global scope
*/ 

//oop princiaples
//1- inheritance
//2- encapsulation
//3- abstruction
//4- polymor phism

//كل واحدة من دول لها كلاس لأنهم متشابهين
//user login
//user logout 
//user register


//make order
//review order
//check order

//EX:
class user{
    /*  اللي بيتكتب جوه الكلاس حاجتين 
    proparity=> variable
    method => function
    */
    /* access modifire => puplic, protected, private
      function, proparity بستحدمهم  عشان اعرف بيهم ال 
    */

    //user proparity
    public $name;
    public $id;
    public $email;
    public $password;
    public $gender;
    public $image = '1.png';

    //user similiar method
    public function login(){
        //بكتب هنا أي كود أنا عاوزه لوب أو شرط
        echo 'login <br>';
    }
    public function logout(){
        echo 'logout';
    }
    
}

//to accsses this class proparity in global scope use object
 $user = new user; //now you acssess this class u can make an edit, add and delete
 // -> object operator
 $user -> name ='ahmed'; //edit value
 $user -> id ='238849';
 $user -> email ='ahmed@gmail.com';
 $user -> password ='122345';
 $user -> gender ='m';
 //access method
 $user -> login();
//   print_r($user);
 //to make another user  value make another object
$user2 = new user;

$user2 -> name ='ehdaa'; //edit value
$user2 -> id ='894899';
$user2 -> email ='ehdaa@gmail.com';
$user2 -> password ='122345';
$user2 -> gender ='f';
$user2 -> order = 'make an order'; //set value
$user2 -> logout();
// echo $user2 -> gender;
//   print_r($user2);