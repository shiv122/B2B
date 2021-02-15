<?php include 'dbcon.php' ?>
<?php  
$val=$_POST['val'];
$user=$_POST['user'];
$qt=$_POST['qt'];

$sql="INSERT into cart (product,user,quantity) values ('$val','$user','$qt')";
if (mysqli_query($conn, $sql)) 
{


}
else
{
	echo "failed";
}
?>