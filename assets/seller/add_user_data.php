<?php
include 'dbcon.php';
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

if($path!='') {

$ext = pathinfo( $path, PATHINFO_EXTENSION );

$file_name = basename( $path, '.' . $ext );

if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {

$valid = 0;

$error_message = 'You must have to upload jpg, jpeg, gif or png file<br>';

}

} else {

$valid = 0;

$error_message = 'You must have to select a photo<br>';

}
$final_name = 'img'.'.'.$ext;
move_uploaded_file( $path_tmp, '../admin/assets/img'.$final_name );

$f='../admin/assets/img'.$final_name;

$sql="insert into users (username,name,mobile,phone,address,image,city,dob)
values('$email','$username','$mobile','$phone','$address','$f','$city','$dob')";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= panel-page-users.php");



include 'assets/success.php';
}
else
{
	echo "failed";
}

?>