<?php
include 'dbcon.php'

?>
<?php
session_start();

$sql="DELETE from product where id='".$_SESSION['del']."' ";

if (mysqli_query($conn, $sql)) 
{
echo "data deleted";
 header("Location: panel-page-products.php");

}
else
{
	echo "failed";
}


?>