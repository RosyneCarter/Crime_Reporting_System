<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{

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
<title>Officer Profile</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div style="margin-left:50px;">
        <form name="updateticket" id="updateticket" method="post"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php 
                    $ret1=mysqli_query($con,"select * FROM police where id='".$_GET['pid']."'");
                    while($row=mysqli_fetch_array($ret1))
                    {
                    ?>	
                        <tr>
                            <td colspan="2"><b><?php echo $row['fullname'];?>'s profile</b></td>
                        </tr>
                        <tr>
                            <td  >&nbsp;</td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr height="50">
                            <td><b>Rank :</b></td>
                            <td><?php echo htmlentities($row['rank']); ?></td>
                        </tr>
                        <tr height="50">
                            <td><b>User Email:</b></td>
                            <td><?php echo htmlentities($row['email']); ?></td>
                        </tr>
                        <tr height="50">
                            <td><b>User Contact no:</b></td>
                            <td><?php echo htmlentities($row['mobile']); ?></td>
                        </tr>
                        <tr height="50">
                            <td><b>Address:</b></td>
                            <td><?php echo htmlentities($row['add']); ?></td>
                        </tr> 
                    <?php } 
                ?>
            </table>
        </form>
    </div>
</body>
</html>
<?php } ?>