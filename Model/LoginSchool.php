<?php
include("Model/DataBase.php");

class LoginSchool extends DataBase
{
	public $db_password;
    public $db_email;
    
	public function login_school ($email, $password){
		$query = "SELECT * FROM school WHERE email = '".$email."'";
		if($result = mysqli_query($this->conn,$query)){
            // fetch school data from the database
			while ($row = mysqli_fetch_array($result)) {
                // storing data inside variable
				$this->db_password = $row["password"];
                $this->db_email = $row["email"];
                // compare input data to the one inside database
				if ($this->db_email==$email) {
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
