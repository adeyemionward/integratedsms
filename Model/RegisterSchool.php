<?php
include("DataBase.php");

class RegisterSchool extends DataBase{

	public function register_school($name, $email, $password){ 
		$query = "INSERT INTO school (school_name, email, password) VALUES ('".$name."','".$email."', '".$password."')";
		if($result = mysqli_query($this->conn, $query)){
			$_SESSION['school_name']=$name;
			$_SESSION['email']=$email;
			$_SESSION['password']=$password;
		 	return true;

		}else{
		 	mysqli_error();
		}
	}

   
	public function school_exists($name){
		$query = "SELECT school_name FROM school WHERE school_name = '".$name."'";
		if ($result = mysqli_query($this->conn, $query)) {
			if (mysqli_num_rows($result)>=1) {
				return true;
			}else{
				return false;
			}
		}
	}

	public function email_exists($email){
		$query = "SELECT email FROM school WHERE email = '".$email."'";
		if ($result = mysqli_query($this->conn, $query)) {
			if (mysqli_num_rows($result)>=1) {
				return true;
			}else{
				return false;
			}
		}
	}

}
