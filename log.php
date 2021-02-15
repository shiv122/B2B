<?php
//session_destroy();
include 'dbcon.php';
if (isset($_POST['email']) and isset($_POST['pass'])){
$email =$_POST['email'];
$pass = $_POST['pass'];

$query = "SELECT * from seller_buyer where email='$email' and pass ='$pass' " ;
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
if($row['seller_buyer_status']=='0'){
if ($count == 1) {
	if ($row['activation_status']=='1')
	{
	session_start();
	$_SESSION['log_buyer'] = $row['id'];
	
     //echo "welcome ".$_SESSION['log_user'];
   $sql="UPDATE seller_buyer set live=1 where id='".$row['id']."' ";
	

	$res = mysqli_query($conn, $sql) ;
	header("location: index.php");
	exit();
}

}

else
{
	header("location: incorrect.php");

}
}
if ($row['activation_status']=='0') {
	
	echo "your request is in pending list";
}
if ($row['activation_status']=='2') {
	
	echo "you have been blocked by admin";
}
}
else
{
	echo "empty";
}
// if ($row) {
// 	# code...
// }
// }

?>