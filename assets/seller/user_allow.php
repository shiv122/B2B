<?php
include 'dbcon.php'

?>
<?php
session_start();

$sql="UPDATE users set u_status=1 where id='".$_SESSION['us_al']."' ";

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