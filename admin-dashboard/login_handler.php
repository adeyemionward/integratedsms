<?php
session_start();
include_once("Model/LoginSchool.php");
$school_login = new LoginSchool();

if (!empty($_POST["email"])) {
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
        if ($school_login->login_school( $email, md5($password))) {
            echo 1;
        }
}
