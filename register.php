<!DOCTYPE html>
<html>
<?php include_once("includes/head.php"); ?>
<body style="background-image: url(images/bg1.jpg);background-repeat: no-repeat; background-size:cover; background-position: center;background-attachment: fixed;">

<!-- school registration -->
<div class="container">
  <div class="col-lg-6 form-container offset-lg-3">
 
  <form method="POST" id="register_school">
     <h2 class="text-center" style="padding-top: 15px;">Register School</h2>
    <div class="form-group col-lg-10 offset-lg-1">
      <label for="schoolname">School Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter School Name" name="school_name">
    </div>
    <div class="form-group col-lg-10 offset-lg-1">
      <label for="Fullname">Fullname:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Your Fullname" name="fullname">
    </div>

    <div class="form-group col-lg-10 offset-lg-1">
      <label for="phone">Phone:</label>
      <input type="tel:" class="form-control" id="pwd" placeholder="Enter Phone Number" name="phone">
    </div>
    
    <div class="form-group col-lg-10 offset-lg-1">
      <label for="email">Email:</label>
      <input type="tel:" class="form-control" id="pwd" placeholder="Enter Email" name="email">
    </div>

    <div class="form-group col-lg-10 offset-lg-1">
      <label for="password">Password:</label>
      <input type="password:" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>

    <div class="form-group col-lg-10 offset-lg-1">
     <button type="submit" class="btn btn-success form-control">Register School</button><br><br><br>
    </div>
    
  </form>
</div>
</div>
<?php include_once("includes/footer.php"); ?>