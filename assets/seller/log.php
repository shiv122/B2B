<?php
//session_destroy();
include 'dbcon.php';
if (isset($_POST['email']) and isset($_POST['pass'])){
$email =$_POST['email'];
$pass = $_POST['pass'];

$query = "SELECT * from seller_buyer where email='$email' and pass ='$pass' " ;
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if( mysqli_num_rows($result)>0){
$row = mysqli_fetch_assoc($result);
if($row['activation_status']=='1')
{

	session_start();
	$_SESSION['log_seller'] = $row['id'];
	
     //echo "welcome ".$_SESSION['log_user'];
   $sql="UPDATE users set live=1 where id='".$row['id']."' ";
	

	$res = mysqli_query($conn, $sql) ;
	header("location: dashboard.php");
	exit();

}
if ($row['activation_status']=='0') {
	
	echo "your request is in pending list";
}
if ($row['activation_status']=='2') {
	
	echo "you have been blocked by admin";
}
}
}
else{
	echo "incorrect username / passsword";
}

?>