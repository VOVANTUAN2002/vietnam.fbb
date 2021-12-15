<?php
class Preson {
    function say(){
        echo "hello";
    }
}
class User extends Preson {
    function say(){
        echo "xin chao!";
    }
}
$user = new User();
$user->say();
?>