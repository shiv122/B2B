<?php
include 'dbcon.php';
?>
<?php
session_start();

$sql="UPDATE catagory set cat_status=1 where id='".$_SESSION['cat_apr']."' ";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= category_control.php");



include 'assets/success.php';


}
else
{
	echo "failed";
}

?>