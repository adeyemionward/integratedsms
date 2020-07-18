<?php session_start();
if (isset($_SESSION["email"])) {
	include_once("../Model/FetchData.php");
	$fetch_all_data = new FetchData();

	// school data
	$fetch_all_data->fetch_school_data($_SESSION["email"]);
	$fetch_all_data->school_name;
	//

	$fetch_all_cours = $fetch_all_data->fetch_courses($fetch_all_data->school_name);
	$fetch_all_students = $fetch_all_data->fetch_students($fetch_all_data->school_name);

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
				<h1 class="page-title">Dashboard</h1>
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
							<h4 class="box-title">List Of Students</h4>
							<table id="example" class="table table-striped table-bordered display" style="width:100%; ">
								<thead>
									<tr>
										<th>Student Name</th>
										<th>Reg No.</th>
										<th>Admission Date</th>
										<th>Course</th>
										<th>Session</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($fetch_all_students as $key => $student) { ?>
										<tr>
											<td><?php echo $student["student_name"] ?></td>
											<td><?php echo $student["reg_no"] ?></td>
											<td><?php echo $student["admission_date"] ?></td>
											<td><?php echo $student["course"] ?></td>
											<td><?php echo $student["session"] ?></td>
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