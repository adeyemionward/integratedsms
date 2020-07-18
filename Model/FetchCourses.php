<?php
include("../Model/DataBase.php");

class FetchCourses extends DataBase
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
}
