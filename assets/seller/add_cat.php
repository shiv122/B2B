<?php
include 'dbcon.php'

?>
<?php
//print_r($_POST);
$cat=$_POST['cata'];
$dis=$_POST['cat_dis'];
$path = $_FILES['photo']['name'];

$path_tmp = $_FILES['photo']['tmp_name'];

if($path!='') {

$ext = pathinfo( $path, PATHINFO_EXTENSION );

$file_name = basename( $path, '.' . $ext );
$final_name = $cat.'.'.$ext;
move_uploaded_file( $path_tmp, '../admin/assets/img'.$final_name );

$f='../admin/assets/img'.$final_name;



$sql="INSERT into catagory (name,discription,img) values ('$cat','$dis','$f')";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= manage_cat.php");



include 'assets/success.php';

}
else
{
	echo "failed";
}

if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {

$valid = 0;

$error_message = 'You must have to upload jpg, jpeg, gif or png file<br>';

}

}
else
{
	$sql="INSERT into catagory (name,discription) values ('$cat','$dis')";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= manage_cat.php");



include 'assets/success.php';

}
else
{
	echo "failed";
}
}




?>