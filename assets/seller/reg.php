<?php
include 'dbcon.php';

?>
<?php
$name=$_POST['fname']."".$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$sql="insert into users (name,username,password)
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