<?php 

//classes
class User {
    public $email; //better practice to make them private
    public $name;

    public function_construct($name, $email) //constructor of fnc....
    {
        $this->name = $name;
        $this->email=$email;
    }
    

    public function login()
    {
        echo 'user is loged in';
    }

}
/*
$userOne = new User();
$userOne->login();
echo $userOne->name;
*/
$userTwo = new User('Mario', 'mario@netninja.com');
echo $userTwo->name;
?>