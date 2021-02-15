<?Php include 'dbcon.php'; ?>
<?php 
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$company=$_POST['company'];
$street=$_POST['street'];
$aadhar=$_POST['aadhar'];
$zip=$_POST['zip'];
$state=$_POST['state'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$shop=$_POST['shop_name'];

$sql="UPDATE seller_buyer set name='$name',email='$email',company='$company',street='$street',adhar_no='$aadhar',zip='$zip',state='$state',country='$country',phone='$phone',shop='$shop' where id='".$_SESSION['log_buyer']."' ";
if (mysqli_query($conn, $sql)) 
{
	 header("refresh:4;url= ../customer-account.php");

include '../admin/assets/success.php';
}
else
{
	echo ('error'.mysqli_error($conn));
}





?>