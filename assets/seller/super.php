<?php
include 'dbcon.php';
if (isset($_POST['email']) and isset($_POST['pass'])){
$email =$_POST['email'];
$pass = $_POST['pass'];

$query = "select * from perm where username='$email' and password ='$pass'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1) {
	session_start();
	$_SESSION['log_user'] = $email;
     

	header("location: dashboard.php");
	exit();
}
else
{
	echo "invalid username or pass";
}
}

?>