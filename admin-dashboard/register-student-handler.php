<?php
//session_start();
include_once("../Model/RegisterStudent.php");
$student_reg = new RegisterStudent();

if (!empty($_POST["student_name"])) {
    $school = filter_input(INPUT_POST, 'school_name');
    $student_name = filter_input(INPUT_POST, 'student_name');
    $reg_no = filter_input(INPUT_POST, 'reg_no');
    $admission_date = filter_input(INPUT_POST, 'admission_date');
    $course = filter_input(INPUT_POST, 'course');
    $session = filter_input(INPUT_POST, 'session');
    if ($student_reg->register_student($school, $student_name, $reg_no, $admission_date, $course, $session)) {
        echo 1;
    }
}
