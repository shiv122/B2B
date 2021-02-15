<?php
//session_destroy();
include 'dbcon.php';
if (isset($_POST['email']) and isset($_POST['pass'])){
$email =$_POST['email'];
$pass = $_POST['pass'];

$query = "SELECT * from users where username='$email' and password ='$pass' " ;
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if(mysqli_num_rows($result)>0){
$row = mysqli_fetch_assoc($result);
if($row['u_status']=='1'){

	if ($row['role']=='1')
	{
	session_start();
	$_SESSION['log_user'] = $email;
	
     //echo "welcome ".$_SESSION['log_user'];
   $sql="UPDATE users set status=1 where id='".$row['id']."' ";
	

	$res = mysqli_query($conn, $sql) ;
	header("location: dashboard.php");
	exit();
}
if ($row['role']=='0') {
	echo "welcome".$row['username'];
	$sql="UPDATE users set status=1 where id='".$row['id']."' ";
	

	$res = mysqli_query($conn, $sql) ;
	?>

     <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>

  
  <a href="assets/logout.php?id=<?php echo $row["id"]; ?>">



   log out</a>

	<?php
	 
}


else
{
	header("location: incorrect.php");

}
}
if ($row['u_status']=='0') {
	
	echo "your request is in pending list";
}
if ($row['u_status']=='2') {
	
	echo "you have been blocked by admin";
}
}
else
{


$query1 = "SELECT * from seller_buyer where (email='$email') and (pass ='$pass')   "  ;
$result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
if (mysqli_num_rows($result1)>0) {
$row1 = mysqli_fetch_assoc($result1);

if ($row1['activation_status']=='1') {
	# code...

session_start();
	$_SESSION['log_seller'] = $row1['id'];
	
     //echo "welcome ".$_SESSION['log_user'];
   $sql="UPDATE seller_buyer set live=1 where id='".$row1['id']."' ";
	

	$res = mysqli_query($conn, $sql) ;
	header("location: dashboard2.php");
	exit();

}
if ($row1['activation_status']=='0') {
	echo "your request is in pending";
}
if ($row1['activation_status']=='2') {
	echo "you are blocked";
}
	# code...
}
else{
echo "incorrect username or password";
}

}
}
else
{
	echo "empty ";
}


?>