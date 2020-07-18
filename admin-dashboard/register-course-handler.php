<?php
//session_start();
include_once("../Model/RegisterCourse.php");
$course_reg = new RegisterCourse();

if (!empty($_POST["course_title"])) {
    $school = filter_input(INPUT_POST, 'school_name');
    $course_title = filter_input(INPUT_POST, 'course_title');
    $course_code = filter_input(INPUT_POST, 'course_code');
    $course_description = filter_input(INPUT_POST, 'course_description');
    $course_duration = filter_input(INPUT_POST, 'course_duration');
    $lecturer = filter_input(INPUT_POST, 'lecturer');
    if ($course_reg->code_exists($school, $course_code)) {
        echo 13;
    }else {
        if ($course_reg->register_course($school,$course_title, $course_code, $course_description, $course_duration, $lecturer)) {
            echo 1;
        }
    }
}
