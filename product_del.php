<?php
include 'dbcon.php' ?>
<?php  
$del=$_GET['id'];

$sql="DELETE from cart where id='".$_GET['id']."' ";

if (mysqli_query($conn, $sql)) 
{
//echo "data deleted";
 header("Location: shoping-cart.php");

}
else
{
	echo "failed";
}

?>