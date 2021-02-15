<?php
include 'dbcon.php'

?>
<?php


$sql="DELETE from users where id='".$_GET['id']."' ";

if (mysqli_query($conn, $sql)) 
{
//echo "data deleted";
 header("Location: ../user_control.php");

}
else
{
	echo "failed";
}


?>