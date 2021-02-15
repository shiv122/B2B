<?php
include 'dbcon.php'

?>
<?php
session_start();

$sql="DELETE from inbox where id='".$_SESSION['msg_del']."' ";

if (mysqli_query($conn, $sql)) 
{
//echo "data deleted";
 header("Location: admin_inbox.php");

}
else
{
	echo "failed";
}


?>