<?php
session_start();
include_once("Model/RegisterSchool.php");
$school_reg = new RegisterSchool();

if (!empty($_POST["name"])) {
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    if ($school_reg->school_exists($name)) {
        echo 12;
    }else if($school_reg->email_exists($email)){
        echo 13;
    }else{
        if ($school_reg->register_school($name, $email, md5($password))){
            echo 1;
        }
    }  
}
