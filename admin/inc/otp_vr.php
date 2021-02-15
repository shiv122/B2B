<?php 
include 'dbcon.php';
session_start();
?>
<?php
$otp=$_POST['otp'];

$sql="SELECT * from otp where phone='".$_SESSION['otp_phone']."' ";
   $result = mysqli_query($conn ,$sql);
   $row = mysqli_fetch_assoc($result);
   if (mysqli_num_rows($result)>0) 
   {
   $_SESSION['log_seller']=1;
   $sq="DELETE FROM otp
WHERE phone ='".$_SESSION['otp_phone']."' ";
if(mysqli_query($conn, $sq))
{
	unset($_SESSION["otp_phone"]);
     header("refresh:4;url= ../dashboard2.php");
    include '../assets/success.php';

}
   }

?>