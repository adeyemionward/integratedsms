<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <link rel="stylesheet" type="text/css" href="assets/sweetalert/sweetalert.css">

  <div class="topnav" id="myTopnav" style="background-color: #fff">

    <a href="/" class="active">INTEGRATED SMS</a>
    <?php 
    if (isset($_SESSION["email"])) { ?>
      <a href="admin-dashboard"><button class="btn btn-success">Dashboard</button></a>
    <?php } else { ?>
      <a href="register"><button class="btn btn-success">Register School</button></a>
      <a href="login">Login</a>
    <?php } ?>



    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</head>