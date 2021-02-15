<?php
include 'dbcon.php';

?>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$sql="insert into seller_buyer (name,email,pass)
values('$name','$email','$pass')";
if (mysqli_query($conn, $sql)) 
{
echo "inserted";



}
else
{
	echo "failed";
}

?>