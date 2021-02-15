<?php
include 'dbcon.php'

?>
<?php
session_start();
//print_r($_POST);
$pro_name= $_POST['pro_name'];
$pro_brand= $_POST['pro_brand'];
$catagory= $_POST['catagory'];
$price= $_POST['price'];
$sku= $_POST['sku'];
$pro_details= $_POST['pro_details'];
$tags= $_POST['tags'];
$path = $_FILES['photo']['name'];

$path_tmp = $_FILES['photo']['tmp_name'];

if($path!='') {

$ext = pathinfo( $path, PATHINFO_EXTENSION );

$file_name = basename( $path, '.' . $ext );

$final_name = $pro_name.'img'.'.'.$ext;
move_uploaded_file( $path_tmp, '../admin/assets/img'.$final_name );

$f='../admin/assets/img'.$final_name;


$sql ="UPDATE product set pro_name='$pro_name',pro_brand='$pro_brand',catagory='$catagory',price='$price',sku='$sku',pro_details='$pro_details', tags='$tags',mod_date=CURRENT_TIMESTAMP, image='$f' where id='".$_SESSION['product']."' ";

if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= panel-page-products-create.php");



include 'assets/success.php';


}
else
{
	echo "failed1";
}

if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {

$valid = 0;

$error_message = 'You must have to upload jpg, jpeg, gif or png file<br>';

}

} else {


$sql ="UPDATE product set pro_name='$pro_name',pro_brand='$pro_brand',catagory='$catagory',price='$price',sku='$sku',pro_details='$pro_details', tags='$tags',mod_date=CURRENT_TIMESTAMP where id='".$_SESSION['product']."' ";

if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= panel-page-products-create.php");



include 'assets/success.php';


}
else
{
	echo "failed2";
}

}


?>