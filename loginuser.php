<?php
include('crsdatabase.php');
$Email=$_POST['u_email'];
$Password=$_POST['pwd'];
$_qc="SELECT 	u_name,pwd FROM `userlogin` WHERE u_email='$Email' and pwd='$Password'";
$_qd=mysqli_query($con,$_qc) or die(mysqli_error($con));
$row=mysqli_num_rows($_qd);
if($row==1){
  ?>
  <script>
  alert("Login Successfully");
  window.open("register_report1.html","_self");
  </script>
  <?php
}  
else
{
  echo "Error";
}
?>