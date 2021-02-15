<?php
include 'dbcon.php';
?>
<?php
session_start();

$sql="UPDATE seller_buyer set activation_status=1 where id='".$_SESSION['seller_appr']."' ";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= seller.php");



include 'assets/success.php';


}
else
{
	echo "failed";
}

?>