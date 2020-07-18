<?php session_start();
if (isset($_SESSION["email"])) {
    include_once("../Model/FetchData.php");
	$fetch_all_data = new FetchData();
	$fetch_all_cours = $fetch_all_data->fetch_courses($_SESSION["school_name"]);

?>
    <!DOCTYPE html>
    <html lang="en">
    <title>Register Course - Integrated SMS</title>
    <!-- head file contains links to css files -->
    <?php include_once("includes/head.php"); ?>
    <?php //include_once("register-course-handler.php"); ?>

    <body>
        <div class="main-menu">
            <header class="header">
                <a href="#" class="logo" style="background-color: #33a562;">IntegratedSMS</a>
                <button type="button" class="button-close fa fa-times js__menu_close"></button>
            </header>
            <!-- header -->
            <div class="content">

                <div class="navigation">
                    <!-- title -->
                    <ul class="menu js__accordion">
                        <li>
                            <a class="waves-effect bg-success" href="admin-dashboard"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
                        </li>
                    </ul>
                    <!-- /.menu js__accordion -->
                    <!-- courses accordion -->
                    <ul class="menu js__accordion">
                        <li>
                            <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-book"></i><span>Courses</span><span class="menu-arrow fa fa-angle-down"></span></a>
                            <ul class="sub-menu js__content">
                                <li><a href="register-course">Register Courses</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- student accordion -->
                    <ul class="menu js__accordion">
                        <li class="current">
                            <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-graduation-cap"></i><span>Students</span><span class="menu-arrow fa fa-angle-down"></span></a>
                            <ul class="sub-menu js__content">
                                <li><a href="register-students">Register Students</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="fixed-navbar bg-success">
            <div class="pull-left">
                <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
                <h1 class="page-title">Register Students</h1>
            </div>
            <div class="pull-right">
                <a href="#" style="color: #fff;"><?php echo $_SESSION["school_name"] ?></a>
                <div class="ico-item">
                    <i class="ti-user"></i>
                    <ul class="sub-ico-item">
                        <li><a class="js__logout" href="../logout">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- course registration form -->
        <div id="wrapper">
            <div class="main-content">
                <div class="row small-spacing">
                    <div class="">
                        <div class="col-lg-6 col-xs-12 col-lg-offset-3">
                            <div class="box-content card white" style="border-radius: 10px;">
                                <h1 class="box-title">Register Student</h1>
                                <!-- /.box-title -->
                                <div class="card-content">
                                    <form method="POST" id="register_student">
                                        <input type="hidden" class="form-control" value="<?php echo $_SESSION["school_name"] ?>" name="school_name" required placeholder="Enter course title">
                                        <div class="form-group">
                                            <label for="studentName">Student Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="student_name" required placeholder="Enter student name">
                                        </div>
                                        <div class="form-group">
                                            <label for="regNo">Registration Number<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="reg_no" required placeholder="Enter registration no.">
                                        </div>
                                        <div class="form-group">
                                            <label for="admissionDate">Admission Date<span class="required">*</span></label>
                                            <input type="date" class="form-control" name="admission_date" required placeholder="Enter admission date">
                                        </div>

                                        <div class="form-group">
                                            <label for="lecturerName">Select Course<span class="required">*</span></label>
                                            <select class="form-control" required name="course">
                                                <option value="">Select course</option>
                                                <?php if (mysqli_num_rows($fetch_all_cours) < 1) {?>
                                                   <option value="">Please register courses</option>
                                                <?php }else{
                                                        foreach ($fetch_all_cours as $key => $course) { ?>
                                                <option>
                                                    <?php echo $course["course_title"] ?>
                                                </option>
                                                <?php  } } ?> 
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sessionYear">Session(YEAR)<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="session" required placeholder="Enter session year"></textarea>
                                        </div>
                                        <div id="message" class="form-group col-lg-10 offset-lg-1"></div>
                                        <button type="submit" name="student_reg" class="btn btn-success btn-sm waves-effect waves-light">Register student</button>
                                    </form>
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <!-- /.box-content -->
                        </div>
                    </div>
                </div>

                <!-- Placed at the end of the document so the pages load faster -->
                <?php include_once("includes/footer.php"); ?>
            </div>
        </div>

    </body>

    </html>
<?php } else {
    echo "<script>window.location.href='/'</script>";
}
?>