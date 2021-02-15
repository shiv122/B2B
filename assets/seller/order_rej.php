<?php
include 'dbcon.php';
?>
<?php
session_start();

$sql="UPDATE orders set order_status_id=2 where order_id='".$_SESSION['order_rj']."' ";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= orders.php");



include 'assets/success.php';


}
else
{
	echo "failed";
}

?>