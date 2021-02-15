<?php
include 'dbcon.php';

?>
<?php

$text=$_POST['bt'];
$link=$_POST['link'];
$path = $_FILES['photo']['name'];






$path_tmp = $_FILES['photo']['tmp_name'];

if($path!='') {
$n=rand(100,999);
$m=rand(1000,9999);
$ext = pathinfo( $path, PATHINFO_EXTENSION );



$file_name = basename( $path, '.' . $ext );
$final_name = $m.'banner'.$n.'.'.$ext;
move_uploaded_file( $path_tmp, '../admin/assets/img/demo/slider/banner'.$final_name );

$f='../admin/assets/img/demo/slider/banner'.$final_name;




$sql="INSERT into banner (name,link,img) values ('$text','$link','$f')";
if (mysqli_query($conn, $sql)) 
{


 

	 header("refresh:4;url= banner.php");
	 include 'assets/success.php';
	# code...


	

}
else
{
	echo ("failed".mysqli_error($conn));
}

if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {

$valid = 0;

$error_message = 'You must have to upload jpg, jpeg, gif or png file<br>';

}

}
?>