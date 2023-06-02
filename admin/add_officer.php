<?php
include('include/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
	$psid=$_GET['id'];
	$fullname=$_POST['fullname'];
	$add=$_POST['add'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
    $rank=$_POST['rank'];
	$aadh=$_POST['aadh'];
	$query=mysqli_query($con,"insert into police(id,fullname,add,gender,mobile,email, rank, aadh) values('$psid','$fullname','$add','$gender','$mobile', '$email', '$rank', '$aadh')");
	$msg="Registration successfull !!";
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
	<title>OCRS | Officier Registration</title>
	<link href="../users/assets/css/bootstrap.css" rel="stylesheet">
	<link href="../users/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="../users/assets/css/style.css" rel="stylesheet">
	<link href="../users/assets/css/style-responsive.css" rel="stylesheet">
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
	<div id="login-page">
		<div class="container">
			<h3 align="center" style="color:#fff"><a href="../index.html" style="color:#fff">Online Crime Reporting System</a></h3>
			<form class="form-login" method="post">
				<h2 class="form-login-heading">Officer Registration</h2>
				<p style="padding-left: 1%; color: green">
				<?php 
				/*if($msg)
				{
					echo htmlentities($msg);
				}*/
				?>
				</p>
				<div class="login-wrap">
					<input type="text" class="form-control" placeholder="Officer Name" id="fullname" name="fullname" required="required">
					<br>
					<input type="text" class="form-control" placeholder="Address" id="add" name="add" required="required">
					<br>
					<input type="text" class="form-control" name="gender" placeholder="Gender" required="required" autofocus>
					<br>
					<input type="text" class="form-control" maxlength="10" name="mobile" placeholder="Mobile no" required="required" autofocus>
					<br>
					<input type="email" class="form-control" placeholder="Email ID" id="email" name="email" required="required">
					<br>
					<input type="text" class="form-control" name="rank" placeholder="Rank" required="required" autofocus>
					<br>
					<input type="text" class="form-control" maxlength="12" placeholder="Aadhar Number" id="aadh" name="aadh" required="required">
					<br>
					<button class="btn btn-theme btn-block"  type="submit" name="submit" id="submit"><i class="fa fa-user"></i> Register</button>
				</div>
			</form>	  	
	  	</div>
	</div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../users/assets/js/jquery.js"></script>
    <script src="../users/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="../users/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("../users/assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
