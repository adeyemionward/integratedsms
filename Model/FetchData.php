<?php
include("../Model/DataBase.php");

class FetchData extends DataBase
{
    public function fetch_courses($school)
    {
        $query = "SELECT * FROM courses WHERE school = '".$school."'";
        if ($result = mysqli_query($this->conn, $query)){
            return $result;
        }else{
            return false;
        }
    }

    
    public function fetch_students($school)
    {
        $query = "SELECT * FROM students WHERE school_name = '".$school."'";
        if ($result = mysqli_query($this->conn, $query)) {
            return $result;
        } else {
            return false;
        }
    }

    // declaring variables
    public $school_name;
    public $email;
    public function fetch_school_data($email)
    {
        $query = "SELECT * FROM school WHERE email = '".$email ."'";
        if ($result = mysqli_query($this->conn, $query)) {
            while ($row = mysqli_fetch_array($result)) {
                $this->school_name  = $row["school_name"];
                $this->email = $row["email"];
            }
        }
    }
}