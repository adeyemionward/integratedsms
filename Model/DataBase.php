<?php
class DataBase{
	
	public $conn;

	    public function __construct(){
	       	//$this->name = $name;
	       		if ($this->connect("localhost","root","","integratedsms")) {
	       			return true;
	       		}
	    }
		public function connect(){
			if ($this->conn = mysqli_connect("localhost","root","","integratedsms")){
				return true;
			
		}else{ 
			return false;
		}
	}


	
}

$Connect = new DataBase("localhost","root","","integratedsms");

?>