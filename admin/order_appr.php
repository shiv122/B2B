<?php
include 'dbcon.php';
?>
<?php
session_start();
$time=date("Y-m-d h:i:sa");
$sql="UPDATE orders set order_status_id=1,approved='$time' where order_id='".$_SESSION['order_ap']."' ";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= orders.php");



include 'assets/success.php';


}
else
{
	echo ("failed".mysqli_error($conn));
}

?>