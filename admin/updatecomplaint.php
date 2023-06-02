<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
{ 
  header('location:index.php');
}
else 
{
  if(isset($_POST['update']))
  {
    $complaintnumber=$_GET['cid'];
    $status=$_POST['status'];
    $remark=$_POST['remark'];
    $fname=$_POST['fullname'];
    $query=mysqli_query($con,"insert into complaintremark(complaintNumber,status,remark,fullname) values('$complaintnumber','$status','$remark','$fname')");
    $sql=mysqli_query($con,"update tblcomplaints set status='$status' where complaintNumber='$complaintnumber'");
    $sql=mysqli_query($con,"update tblcomplaints set fullname='$fname' where complaintNumber='$complaintnumber'");
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
              <select name="status" required="required">
                <option value="">Select Status</option>
                <option value="in process">In Process</option>
                <option value="closed">Closed</option>  
              </select>
            </td>
          </tr>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Officer</label>
            <div class="col-sm-4">
              <select name="fullname" id="police" class="form-control" onChange="getCat(this.value);" required="">
                <option value="">Select Officer</option>
                <?php $sql=mysqli_query($con,"select fullname from police ");
                while ($rw=mysqli_fetch_array($sql)) {
                ?>
                  <option value="<?php echo htmlentities($rw['fullname']);?>"><?php echo htmlentities($rw['fullname']);?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <tr height="50">
            <td><b>Remark</b></td>
            <td><textarea name="remark" cols="50" rows="10" required="required"></textarea></td>
          </tr>
          <tr height="50">
            <td>&nbsp;</td>
            <td><input type="submit" name="update" value="Submit"></td>
          </tr>
          <tr><td colspan="2">&nbsp;</td></tr>
          <tr>
            <td >   
              <input name="Submit2" type="submit" class="txtbox4" value="Close this window " onClick="return f2();" style="cursor: pointer;"  />
            </td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
<?php } ?>