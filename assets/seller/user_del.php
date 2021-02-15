<?php
include 'dbcon.php'

?>
<?php
session_start();

$sql="DELETE from users where id='".$_SESSION['user_del']."' ";

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