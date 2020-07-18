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
}

