<?php
include("../Model/DataBase.php");

class RegisterCourse extends DataBase
{

    public function register_course($school, $course_title, $course_code, $course_description, $course_duration, $lecturer)
    {
        $query = "INSERT INTO courses (school, course_title, course_code, course_desc, course_duration,lecturer) VALUES ('".$school."','".$course_title."', '".$course_code."', '".$course_description."', '".$course_duration."', '".$lecturer."')";
        if ($result = mysqli_query($this->conn, $query)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function code_exists($school, $course_code)
    {
        $query = "SELECT course_code FROM courses WHERE school = '".$school."' AND course_code = '".$course_code."'";
        if ($result = mysqli_query($this->conn, $query)) {
            if (mysqli_num_rows($result) >= 1) {
                return true;
            } else {
                return false;
            }
        }
    }
}
