<?php
include('users/includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$contactno=$_POST['contactno'];
	$status=1;
	$query=mysqli_query($con,"insert into users(fullName,userEmail,password,contactNo,status) values('$fullname','$email','$password','$contactno','$status')");
	$msg="Registration successfull. Now You can login !";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>OCRS | User Registration</title>
    <link href="users/assets/css/bootstrap.css" rel="stylesheet">
    <link href="users/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="users/assets/css/style.css" rel="stylesheet">
    <link href="users/assets/css/style-responsive.css" rel="stylesheet">
    <script>
      function userAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
      url: "check_availability.php",
      data:'email='+$("#email").val(),
      type: "POST",
      success:function(data){
      $("#user-availability-status1").html(data);
      $("#loaderIcon").hide();
      },
      error:function (){}
      });
      }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="registration.php">Registration</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="login-page">
      <div class="container">
        <h3 align="center" style="color:#fff"><a href="../index.html" style="color:#fff">ONLINE CRIME REPORTING SYSTEM</a></h3>
        <form class="form-login" method="post">
          <h2 class="form-login-heading">User Registration</h2>
          <p style="padding-left: 1%; color: green">
            <?php if($msg)
            {
              echo htmlentities($msg);
            }?>
          </p>
          <div class="login-wrap">
            <input type="text" class="form-control" placeholder="Full Name" name="fullname" required="required" autofocus>
            <br>
            <input type="email" class="form-control" placeholder="Email ID" id="email" onBlur="userAvailability()" name="email" required="required">
              <span id="user-availability-status1" style="font-size:12px;"></span>
              <br>
            <input type="password" class="form-control" placeholder="Password" required="required" name="password"><br >
            <input type="text" class="form-control" maxlength="10" name="contactno" placeholder="Contact no" required="required" autofocus>
            <br>
            <button class="btn btn-theme btn-block"  type="submit" name="submit" id="submit"><i class="fa fa-user"></i> Register</button>
            <div class="registration">
              Already Registered<br/>
              <a class="" href="users/index.php">
                Sign in
              </a>
            </div>
          </div>
        </form>	  	
      </div>
    </div>
    <script src="users/assets/js/jquery.js"></script>
    <script src="users/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="users/assets/js/jquery.backstretch.min.js"></script>
    <script>
      $.backstretch("users/assets/img/crime3.jpg", {speed: 500});
    </script>
  </body>
</html>
