<?php
session_start();
if (!isset($_SESSION["email"])) {
?>
  <!DOCTYPE html>
  <html>
    <title>Login | integratedsms</title>
  <?php include_once("includes/head.php"); ?>

  <body style="background-image: url(images/bg1.jpg);background-repeat: no-repeat; background-size:cover; background-position: center;background-attachment: fixed;">
    <!-- school registration -->
    <div class="container">
      <div class="col-lg-6 form-container offset-lg-3">

        <form method="POST" id="login_school">
          <h2 class="text-center" style="padding-top: 15px;">Login</h2>

          <div class="form-group col-lg-10 offset-lg-1">
            <input type="email" class="form-control" required placeholder="Enter Email" name="email">
          </div>

          <div class="form-group col-lg-10 offset-lg-1">
            <label for="password">Password:</label>
            <input type="password" class="form-control" required placeholder="Enter password" name="password">
          </div>
          <!-- output error messages -->
          <div id="message" class="form-group col-lg-10 offset-lg-1"></div>

          <p class="text-center">Don't have an account? <a href="register">Register</a></p>
          <div class="form-group col-lg-10 offset-lg-1">
            <button type="submit" name="login" class="btn btn-success form-control">Login</button><br><br><br>
          </div>

        </form>
      </div>
    </div>
    <?php include_once("includes/footer.php"); ?>
  <?php } else {
  //return to admin dashboard if session is set 
  echo "<script>window.location.href='admin-dashboard'</script>";
} ?>
