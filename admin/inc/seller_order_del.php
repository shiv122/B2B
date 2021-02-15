<?php
include 'dbcon.php';
?>
<?php


$sql="UPDATE orders set order_status_id=2 where order_id='".$_GET['id']."' ";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= ../seller_orders.php");



include '../assets/success.php';


}
else
{
	echo "failed";
}

?>