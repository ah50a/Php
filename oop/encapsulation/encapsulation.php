<?php

class user
{
    private $name;
    private $password;
    private $gender;
    public $email;

    public function setGender($gender)
    {
        // $genderAllawed =['f' , 'm'];
        define('genderAllawed', [
            'f', 'm'
        ]);
        if (in_array($gender, genderAllawed)) {
            if ($gender == 'm') {
                return  $this->gender = 'male';
            } else {
                return $this->gender = 'famle';
            }
        } else {
            echo "Gender Must Be Male Or Famle";
        }

        // if (!in_array($gender, ['m','f'])) {
        //     echo "Gender Must Be Male Or Famle";
        // }else{
        //     $this->gender =$gender;
        // }
    }
    public function getGender()
    {
        echo $this->gender; //== 'm' ? 'male' : 'famle';
    }

    #getter
    public function getName()
    {
        return $this->name;
    }

    #setter
    public function setName($name)
    {
        if (is_numeric($name)) {
            echo "the name must be a string";
        } else {
            $this->name = $name;
        }
    }


    public function setPass($password)
    {
        if (strlen($password) < 8) {
            echo "password must be greater than 8 char";
        } else {
            $this->password = password_hash($password, PASSWORD_BCRYPT);
        }
    }
    public function getPass()
    {
        return $this->password;
    }
}

$user = new user;
// $user->name =0.1; //erorr
// $user->setName('ahmed');
// echo $user -> getName();
// $user -> setPass(123456789);
// echo $user ->getPass();
$user->setGender('s');
echo $user->getGender();
