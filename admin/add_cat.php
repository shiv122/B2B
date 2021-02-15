<?php
include 'dbcon.php'

?>
<?php

$by=$_POST['by'];
$cat=$_POST['cata'];
$dis=$_POST['cat_dis'];
$path = $_FILES['photo']['name'];
if (isset($_POST['sub_cata'])) {
	$sub=$_POST['sub_cata'];
}

$i=0;




$path_tmp = $_FILES['photo']['tmp_name'];

if($path!='') {

$ext = pathinfo( $path, PATHINFO_EXTENSION );

$file_name = basename( $path, '.' . $ext );
$final_name = $cat.'.'.$ext;
move_uploaded_file( $path_tmp, '../admin/assets/img'.$final_name );

$f='../admin/assets/img'.$final_name;



$sql="INSERT into catagory (name,discription,img,by_user) values ('$cat','$dis','$f','$by')";
if (mysqli_query($conn, $sql)) 
{
if (isset($_POST['sub_cata'])) {
	# code...

$ss="SELECT * FROM catagory order by id desc limit 1";
$re=mysqli_query($conn, $ss);
$row = mysqli_fetch_assoc($re);
$id=$row['id'];
 for($i=0;$i<count($sub);$i++)
 {
 

     $sq="INSERT into sub_category (name,parent) values('$sub[$i]','$id')";
    $re = mysqli_query($conn, $sq);	 
  }
 }
if ($by=='0') {
	header("refresh:4;url= manage_cat.php");
	include 'assets/success.php';
	# code...
}
else
{
header("refresh:4;url= view_seller_category.php");
include 'assets/success.php';	
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

}
else
{
	$sql="INSERT into catagory (name,discription,by_user) values ('$cat','$dis','$by')";
if (mysqli_query($conn, $sql)) 
{
$ss="SELECT * FROM catagory order by id desc limit 1";
$re=mysqli_query($conn, $ss);
$row = mysqli_fetch_assoc($re);
$id=$row['id'];
 for($i=0;$i<count($sub);$i++)
 {
 

     $sq="INSERT into sub_category (name,parent) values('$sub[$i]','$id')";
    $re = mysqli_query($conn, $sq);	 
  }
 

if ($by=='0') {
	//header("refresh:4;url= manage_cat.php");
	//include 'assets/success.php';
	# code...
}
else
{
header("refresh:4;url= view_seller_category.php");
	//include 'assets/success.php';	
}



}
else
{
	echo "failed";
}
}




?>