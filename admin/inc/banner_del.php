<?php
include 'dbcon.php'

?>
<?php


$sql="DELETE from banner where id='".$_GET['id']."' ";

if (mysqli_query($conn, $sql)) 
{
//echo "data deleted";
 header("Location: ../view_banner.php");

}
else
{
	echo "failed";
}


?>