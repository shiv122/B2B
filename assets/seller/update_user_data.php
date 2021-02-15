<?php
include 'dbcon.php';
session_start();
?>


<?php
$username=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$city=$_POST['city'];
$path = $_FILES['photo']['name'];

$path_tmp = $_FILES['photo']['tmp_name'];


$sql2 = "SELECT im_count FROM users WHERE id = '".$_SESSION['the_user']."'";



$result2 = $conn->query($sql2);



$row2 = $result2->fetch_assoc();

$count= $row2['im_count'];



if($path!='') {

$ext = pathinfo( $path, PATHINFO_EXTENSION );

$file_name = basename( $path, '.' . $ext );
$final_name = $_SESSION['the_user'].'im'.$count.'.'.$ext;
move_uploaded_file( $path_tmp, '../admin/assets/img'.$final_name );

$f='../admin/assets/img'.$final_name;



$sql="UPDATE users
SET username='$email',name='$username',mobile='$mobile',phone='$phone',address='$address',city='$city',dob='$dob',image='$f'
WHERE id = '".$_SESSION['the_user']."'";
if (mysqli_query($conn, $sql)) 
{
	header("refresh:4;url= edit_user.php");

include 'assets/success.php';
$count=$count+1;
$sql2="UPDATE users set im_count= '$count' WHERE id = '".$_SESSION['the_user']."' ";
if (mysqli_query($conn, $sql2))

{

	
	
}


}
else
{
	echo "failed";
}

if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {

$valid = 0;

$error_message = 'You must have to upload jpg, jpeg, gif or png file<br>';

}

} else {

$sql="UPDATE users
SET username='$email',name='$username',mobile='$mobile',phone='$phone',address='$address',city='$city',dob='$dob'
WHERE id = '".$_SESSION['the_user']."'";
if (mysqli_query($conn, $sql)) 
{
	header("refresh:4;url= edit_user.php");



include 'assets/success.php';








}
else
{
	echo "failed";
}

}





?>