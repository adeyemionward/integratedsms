<?php
include("../Model/DataBase.php");

class LoginSchool extends DataBase
{
	public $db_password;
    public $db_email;
    
	public function login_school ($email, $password){
		$query = "SELECT * FROM school WHERE email = '".$email."'";
		if($result = mysqli_query($this->db,$query)){
			while ($row = mysqli_fetch_array($result)) {
				$this->db_password = $row["password"];
				$this->email = $row["email"];
				

				if ($this->email==$email) {
					if (md5($password) == $this->db_password) {
						$_SESSION["email"] = $email;
						
						return true;
					}else{
						return false;
					}

					return true;		
				}
			}
		}
	}
}
