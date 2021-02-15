<?php
include 'dbcon.php';
session_start();
?>


<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$adn=$_POST['adhar'];
$address=$_POST['address'];

$path = $_FILES['photo']['name'];
$path1 = $_FILES['photo1']['name'];

$path_tmp = $_FILES['photo']['tmp_name'];
$path_tmp1 = $_FILES['photo1']['tmp_name'];


$sql2 = "SELECT id FROM seller_buyer WHERE id = '".$_SESSION['seller_edit']."'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
if (empty($path) and empty($path1)) {
	echo "aaaa";
	$s="UPDATE seller_buyer set name='$name' ,email='$email', address='address',phone='$phone' ,adhar_no='$adn' where id='".$_SESSION['seller_edit']."' ";
if (mysqli_query($conn, $s))

{
header("refresh:4;url= edit_seller.php");



include 'assets/success.php';
	
}


else
{
	echo "failed";
}
}
else
{
if($path!='' and $path1!='') {

$ext = pathinfo( $path, PATHINFO_EXTENSION );

$file_name = basename( $path, '.' . $ext );
$final_name = $_SESSION['seller_edit'].'.'.$ext;
move_uploaded_file( $path_tmp, '../admin/assets/img'.$final_name );

$f='../admin/assets/img'.$final_name;

$ext1 = pathinfo( $path1, PATHINFO_EXTENSION );

$file_name1 = basename( $path1, '.' . $ext1 );
$final_name1 = $_SESSION['seller_edit'].'adhar'.'.'.$ext1;
move_uploaded_file( $path_tmp1, '../admin/assets/img'.$final_name1 );

$f1='../admin/assets/img'.$final_name1;

$s="UPDATE seller_buyer set name='$name' ,email='$email', address='address', image='$f',adhar='$f1' ,phone='$phone' ,adhar_no='$adn' where id='".$_SESSION['seller_edit']."' ";
if (mysqli_query($conn, $s))

{

	header("refresh:4;url= edit_seller.php");



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

else {


 	if ($path!='') {

 		$ext = pathinfo( $path, PATHINFO_EXTENSION );

$file_name = basename( $path, '.' . $ext );
$final_name = $_SESSION['seller_edit'].'im'.'.'.$ext;
move_uploaded_file( $path_tmp, '../admin/assets/img'.$final_name );

$f='../admin/assets/img'.$final_name;

$s="UPDATE seller_buyer set name='$name' ,email='$email', address='address', image='$f',phone='$phone' ,adhar_no='$adn' where id='".$_SESSION['seller_edit']."' ";
if (mysqli_query($conn, $s))

{

	header("refresh:4;url= edit_seller.php");



include 'assets/success.php';
	
}


else
{
	echo "failed";
}


 	}

 	if ($path1!='') 
 	{
 		$ext1 = pathinfo( $path1, PATHINFO_EXTENSION );

$file_name1 = basename( $path1, '.' . $ext1 );
$final_name1 = $_SESSION['seller_edit'].'adhar'.'.'.$ext1;
move_uploaded_file( $path_tmp1, '../admin/assets/img'.$final_name1 );

$f1='../admin/assets/img'.$final_name1;
$s="UPDATE seller_buyer set name='$name' ,email='$email', address='address',adhar='$f1' ,phone='$phone' ,adhar_no='$adn' where id='".$_SESSION['seller_edit']."' ";
if (mysqli_query($conn, $s))

{

header("refresh:4;url= edit_seller.php");



include 'assets/success.php';
	
}


else
{
	echo "failed";
}
 	}











 }
}



?>