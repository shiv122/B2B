<?php
include 'dbcon.php'

?>
<?php
session_start();

$sql="DELETE from catagory where id='".$_SESSION['cat_delete']."' ";

if (mysqli_query($conn, $sql)) 
{
//echo "data deleted";
 header("Location: manage_cat.php");

}
else
{
	echo "failed";
}


?>