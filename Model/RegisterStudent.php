<?php
include("../Model/DataBase.php");

class RegisterStudent extends DataBase
{

    public function register_student($school, $student_name, $reg_no, $admission_date, $course, $session)
    {
        $query = "INSERT INTO students (school, student_name, reg_no, admission_date, course, session) VALUES ('" . $school . "','" . $student_name . "', '" . $reg_no . "', '" . $admission_date . "', '" . $course . "', '" . $session . "')";
        if ($result = mysqli_query($this->conn, $query)) {
            return true;
        } else {
            return false;
        }
    }
}
