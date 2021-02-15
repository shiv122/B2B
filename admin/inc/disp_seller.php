<?php include 'dbcon.php'; ?>
<?php

$id=$_GET['id'];

$sql="UPDATE orders set dispatched='1' where order_id='".$id."' ";
if (mysqli_query($conn, $sql))

{
	header("refresh:4;url= ../seller_orders.php");



include '../assets/success.php';

}
else
{
	echo ("failed".mysqli_error($conn));
}

 ?>