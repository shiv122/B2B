<?php
include 'dbcon.php';
?>
<?php
session_start();

$sql="UPDATE product set product_status=1 where id='".$_SESSION['ap_pro']."' ";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= manage_product.php");



include 'assets/success.php';


}
else
{
	echo "failed";
}

?>