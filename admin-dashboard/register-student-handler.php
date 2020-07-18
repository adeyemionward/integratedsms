<?php
//session_start();
include_once("../Model/RegisterCourse.php");
$course_reg = new RegisterCourse();

if (!empty($_POST["student_name"])) {
    $school = filter_input(INPUT_POST, 'school_name');
    $student_name = filter_input(INPUT_POST, 'student_name');
    $reg_no = filter_input(INPUT_POST, 'reg_no');
    $admission_date = filter_input(INPUT_POST, 'admission_date');
    $course = filter_input(INPUT_POST, 'course');
    $session = filter_input(INPUT_POST, 'session');
    if ($course_reg->register_course($school, $course_title, $course_code, $course_description, $course_duration, $lecturer)) {
        echo 1;
    }
}
