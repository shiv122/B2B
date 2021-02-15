<?php
include 'dbcon.php'

?>
<?php
session_start();

$sql="UPDATE users set u_status=2 where id='".$_SESSION['us_bl']."' ";

if (mysqli_query($conn, $sql)) 
{
//echo "data deleted";
 header("Location: panel-page-users.php");

}
else
{
	echo "failed";
}


?>