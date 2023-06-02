<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else {
  if(isset($_POST['update']))
  {
    $police=$_GET['id'];
    $plcestation=$_GET['police_station_id'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $add=$_POST['add'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $rank=$_POST['rank'];
    $date_of_birth=$_POST['date_of_birth'];
    $aadh=$_POST['aadh'];
    $query=mysqli_query($con,"insert into complaintremark(police_station_id,Fname,Lname,add,gender,mobile,email,rank,date_of_birth,aadh) values('$plcestation','$Fname','$Lname',$add,$gender,$mobile,$email,$rank,$date_of_birth,$aadh)");
    $sql=mysqli_query($con,"update tblcomplaints set status='$status' where complaintNumber='$complaintnumber'");
    echo "<script>alert('Complaint details updated successfully');</script>";
  }
 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User Profile</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>
<div style="margin-left:50px;">
 <form name="updateticket" id="updatecomplaint" method="post"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td  >&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr height="50">
      <td><b>Complaint Number</b></td>
      <td><?php echo htmlentities($_GET['cid']); ?></td>
    </tr>
    <tr height="50">
      <td><b>Status</b></td>
      <td>
      <select class="form-control" name="police" id="police">
        <option selected="selected" value="">Select</option>
          <?php
        //Get all unions from database
        $sql = mysqli_query($dbcon,"select aadh from police");
        while($row = mysqli_fetch_assoc($sql)){ ?>
          <option value="<?php echo $row['aadh'] ?>"> <?php echo $row['aadh']?> </option>
        <?php
        }
        ?> </select>
      </td>
    </tr>
    </tr>
      <tr height="50">
      <td>&nbsp;</td>
      <td><input type="submit" name="update" value="Submit"></td>
    </tr>
      <tr><td colspan="2">&nbsp;</td></tr>
  <tr>
  <td></td>
    <td >   
      <input name="Submit2" type="submit" class="txtbox4" value="Close this window " onClick="return f2();" style="cursor: pointer;"  /></td>
  </tr>
</table>
 </form>
</div>
</body>
</html>
<?php } ?>