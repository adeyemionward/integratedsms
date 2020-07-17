<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin Dashboard - Integrated SMS</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="assets/styles/style.min.css">

	<!-- Themify Icon -->
	<link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
	<!-- Data Tables -->
	<link rel="stylesheet" href="assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">

</head>

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

				<!-- student accordion -->
				<ul class="menu js__accordion">
					<li>
						<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-graduation-cap"></i><span>Students</span><span class="menu-arrow fa fa-angle-down"></span></a>
						<ul class="sub-menu js__content">
							<li><a href="#">Register Students</a></li>
						</ul>
					</li>
				</ul>

				<!-- courses accordion -->
				<ul class="menu js__accordion">
					<li>
						<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-book"></i><span>Courses</span><span class="menu-arrow fa fa-angle-down"></span></a>
						<ul class="sub-menu js__content">
							<li><a href="tables-datatable.html">Register Courses</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="fixed-navbar bg-success">
		<div class="pull-left">
			<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
			<h1 class="page-title">Home</h1>
		</div>
		<div class="pull-right">
			<a href="#" style="color: #fff;">School Admin</a>
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
			<!-- List of students -->
			<div class="row small-spacing">
				<div class="col-xs-12">
					<div class="box-content table-responsive">
						<h4 class="box-title">List Of Students</h4>
						<table id="example" class="table table-striped table-bordered display" style="width:100%; ">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- List of courses -->
			<div class="row small-spacing">
				<div class="col-xs-12">
					<div class="box-content table-responsive">
						<h4 class="box-title">List Of Courses</h4>
						<table id="example" class="table table-striped table-bordered display" style="width:100%; ">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- footer -->
			<footer class="footer">
				<ul class="list-inline">
					<li>2016 © NinjaAdmin.</li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</footer>
		</div>
	</div>
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>

	<!-- data table -->
	<script src="assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
	<script src="assets/scripts/datatables.demo.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>