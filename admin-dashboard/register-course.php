<?php session_start();
if (isset($_SESSION["email"])) {
    include_once("../Model/FetchData.php");
    $fetch_all_data = new FetchData();
    // school data
    $fetch_all_data->fetch_school_data($_SESSION["email"]);
    $fetch_all_data->school_name;
    //

?>
    <!DOCTYPE html>
    <html lang="en">
    <title>Register Course - Integrated SMS</title>
    <!-- head file contains links to css files -->
    <?php include_once("includes/head.php"); ?>
    <?php //include_once("register-course-handler.php"); 
    ?>

    <body>
        <div class="main-menu">
            <header class="header">
                <a href="/" class="logo" style="background-color: #33a562;">IntegratedSMS</a>
                <button type="button" class="button-close fa fa-times js__menu_close"></button>
            </header>
            <!-- header -->
            <div class="content">
                <div class="navigation">
                    <!-- title -->
                    <ul class="menu js__accordion">
                        <li>
                            <a class="waves-effect" href="admin-dashboard"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
                        </li>
                    </ul>
                    <!-- /.menu js__accordion -->
                    <!-- courses accordion -->
                    <ul class="menu js__accordion">
                        <li class="current">
                            <a class="waves-effect bg-success parent-item js__control" href="#"><i class="menu-icon fa fa-book"></i><span>Courses</span><span class="menu-arrow fa fa-angle-down"></span></a>
                            <ul class="sub-menu js__content">
                                <li><a href="register-course">Register Courses</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- student accordion -->
                    <ul class="menu js__accordion">
                        <li>
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
                <button type="button" class="menu-mobile-button bg-success glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
                <h1 class="page-title">Register Course</h1>
            </div>
            <div class="pull-right">
                <a href="#" style="color: #fff;"><?php echo $fetch_all_data->school_name ?></a>
                <div class="ico-item">
                    <i class="ti-user"></i>
                    <ul class="sub-ico-item">
                        <li><a href="../logout">Log Out</a></li>
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
                                <h1 class="box-title">Register Course</h1>
                                <!-- /.box-title -->
                                <div class="card-content">
                                    <form method="POST" id="register_course">
                                        <input type="hidden" class="form-control" value="<?php echo $fetch_all_data->school_name ?>" name="school_name" required placeholder="Enter course title">
                                        <div class="form-group">
                                            <label for="coursetitle">Course Title<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="course_title" required placeholder="Enter course title">
                                        </div>
                                        <div class="form-group">
                                            <label for="courseCode">Course Code<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="course_code" required placeholder="Enter course code">
                                        </div>
                                        <div class="form-group">
                                            <label for="courseDuration">Course Duration</label>
                                            <input type="text" class="form-control" name="course_duration" placeholder="Enter course duration">
                                        </div>

                                        <div class="form-group">
                                            <label for="lecturerName">Lecturer-in-charge</label>
                                            <input type="text" class="form-control" name="lecturer" placeholder="Enter name of lecturer">
                                        </div>
                                        <div class="form-group">
                                            <label for="courseDescription">Course Description</label>
                                            <textarea class="form-control" name="course_description" placeholder="Enter course description"></textarea>
                                        </div>
                                        <div id="message" class="form-group col-lg-10 offset-lg-1"></div>
                                        <button type="submit" name="course_reg" class="btn btn-success btn-sm waves-effect waves-light">Register course</button>
                                    </form>
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <!-- /.box-content -->
                        </div>
                    </div>
                </div>

                <!-- js placed at the end of the document so the pages load faster -->
                <?php include_once("includes/footer.php"); ?>
            </div>
        </div>

    </body>

    </html>
<?php } else {
    echo "<script>window.location.href='/'</script>";
}
?>