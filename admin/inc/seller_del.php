<?php
include 'dbcon.php'

?>
<?php


$sql="DELETE from seller_buyer where id='".$_GET['id']."' ";

if (mysqli_query($conn, $sql)) 
{
//echo "data deleted";
 header("Location: ../seller.php");

}
else
{
	echo "failed";
}


?>