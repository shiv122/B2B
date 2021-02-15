<?php
include 'dbcon.php'

?>
<?php
session_start();
//print_r($_POST);
$name=$_POST['cata'];
$des=$_POST['cat_dis'];
$path = $_FILES['photo']['name'];
$path_tmp = $_FILES['photo']['tmp_name'];
$sub= $_POST['sub_cata1'];

if($path!='') {

$ext = pathinfo( $path, PATHINFO_EXTENSION );

$file_name = basename( $path, '.' . $ext );

$final_name = $name.'img'.'.'.$ext;
move_uploaded_file( $path_tmp, '../admin/assets/img'.$final_name );

$f='../admin/assets/img'.$final_name;


$sql ="UPDATE catagory set name='$name',discription='$des',img='$f' where id='".$_SESSION['cat_edit']."' ";

if (mysqli_query($conn, $sql)) 
{


 for($i=0;$i<count($sub);$i++)
 {
 

     $sq="INSERT into sub_category (name,parent) values('$sub[$i]','".$_SESSION['cat_edit']."')";
    $re = mysqli_query($conn, $sq);	 
  }
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

} else {


$sql ="UPDATE catagory set name='$name',discription='$des',img='$f' where id='".$_SESSION['cat_edit']."'  ";

if (mysqli_query($conn, $sql)) 
{

	for($i=0;$i<count($sub);$i++)
 {
 

     $sq="INSERT into sub_category (name,parent) values('$sub[$i]','".$_SESSION['cat_edit']."')";
    $re = mysqli_query($conn, $sq);	 
  }
header("refresh:4;url= manage_cat.php");



include 'assets/success.php';


}
else
{
	echo "failed";
}

}


?>