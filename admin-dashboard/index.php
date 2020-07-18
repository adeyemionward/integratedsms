<?php session_start();
if (isset($_SESSION["email"])) {
	include_once("../Model/FetchCourses.php");
	$fetch_all_courses = new FetchCourses();
	$fetch_all_cours = $fetch_all_courses->fetch_courses($_SESSION["school_name"]);

?>
	<!DOCTYPE html>
	<html lang="en">
	<title>Admin Dashboard - Integrated SMS</title>
	<!-- head file contains links to css files -->
	<?php include_once("includes/head.php"); ?>

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
						<li class="current">
							<a class="waves-effect bg-success" href="index-2.html"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
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
				<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
				<h1 class="page-title">Dashboard</h1>
			</div>
			<div class="pull-right">
				<a href="#" style="color: #fff;"><?php echo $_SESSION["school_name"] ?></a>
				<div class="ico-item">
					<i class="ti-user"></i>
					<ul class="sub-ico-item">
						<li><a class="js__logout" href="#">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- start of result view -->
		<div id="wrapper">
			<div class="main-content">
				<!-- List of Courses -->
				<div class="row small-spacing">
					<div class="col-xs-12">
						<div class="box-content table-responsive">
							<h4 class="box-title">List Of Courses</h4>
							<table id="example" class="table table-striped table-bordered display" style="width:100%; ">
								<thead>
									<tr>
										<th>Course Title</th>
										<th>Course Code</th>
										<th>Course Duration</th>
										<th>Lecturer</th>
										<th>Course Description</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($fetch_all_cours as $key => $course) { ?>
										<tr>

											<td><?php echo $course["course_title"] ?></td>
											<td><?php echo $course["course_code"] ?></td>
											<td><?php echo $course["course_duration"] ?></td>
											<td><?php echo $course["lecturer"] ?></td>
											<td><?php echo $course["course_desc"] ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- List of Students -->
				<div class="row small-spacing">
					<div class="col-xs-12">
						<div class="box-content table-responsive">
							<h4 class="box-title">List Of Courses</h4>
							<table id="example" class="table table-striped table-bordered display" style="width:100%; ">
								<thead>
									<tr>
										<th>Course Title</th>
										<th>Course Code</th>
										<th>Course Duration</th>
										<th>Course Description</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($fetch_all_cours as $key => $course) { ?>
										<tr>
											<td><?php echo $course["school"] ?></td>
											<td><?php echo $course["course_title"] ?></td>
											<td><?php echo $course["course_code"] ?></td>
											<td><?php echo $course["course_desc"] ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- footer -->
				<?php include_once('includes/footer.php'); ?>
			</div>
		</div>
	</body>

	</html>
<?php } else {
	echo "<script>window.location.href='/'</script>";
}
?>