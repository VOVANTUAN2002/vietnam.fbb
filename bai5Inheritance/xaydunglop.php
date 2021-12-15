<?php

use User as GlobalUser;

class User {
    protected string  $name ;
    protected string  $email ;
    public int $role ;
    public function __construct($name,$email,$role)
    {
        $this->name = $name;
        $this->emali = $email;
        $this->role = $role;
    }
    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function setEmail($email){
        $this->emali = $email;
    }
    function getEmail(){
        return $this->email;
    }
    public function setRole($role){
        $this->role = $role;
    }
    public function getRole(){
        return $this->role;
    }
    public  function getInfo(){
        echo "Username:  $this->username " . "Email:" . $this->email;
    }
    public function isAdmin(){
        if ($this->role == 1)
        {
            echo "là Admin";
        }else
        {
            echo "bạn là người thường";
        }
    }
}
//khởi tạo 1 obj
$objUser = new User ("name","email",2);
// public function __construct($name,$email,$role)
// {
//     $this->name = $name;
//     $this->emali = $email;
//     $this->role = $role;
// }
$objUser->isAdmin();
// public function isAdmin(){
//     if ($this->role==1){
//         echo "là Admin";
//     }else{
//         echo "bạn là người thường";
//     }
// }