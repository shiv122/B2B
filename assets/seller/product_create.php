<?php
include 'dbcon.php'

?>
<?php
//  $f='../admin/assets/img/un1.jpg';
// $f1='../admin/assets/img/un1.jpg';
// $f2='../admin/assets/img/un1.jpg';
// $f3='../admin/assets/img/un1.jpg';
// $f4='../admin/assets/img/un1.jpg';
//print_r($_POST);
$pro_name= $_POST['pro_name'];
$pro_brand= $_POST['pro_brand'];
$catagory= $_POST['catagory'];
$price= $_POST['price'];
$sku= $_POST['sku'];
$pro_details= $_POST['pro_details'];
$tags= $_POST['tags'];
$path = $_FILES['photo']['name'];
$path1 = $_FILES['photo1']['name'];
$path2 = $_FILES['photo2']['name'];
$path3 = $_FILES['photo3']['name'];
$path4 = $_FILES['photo4']['name'];
$path_tmp = $_FILES['photo']['tmp_name'];
$path_tmp1 = $_FILES['photo1']['tmp_name'];
$path_tmp2 = $_FILES['photo2']['tmp_name'];
$path_tmp3 = $_FILES['photo3']['tmp_name'];
$path_tmp4 = $_FILES['photo4']['tmp_name'];


$ext = pathinfo( $path, PATHINFO_EXTENSION );
$ext1 = pathinfo( $path1, PATHINFO_EXTENSION );
$ext2 = pathinfo( $path2, PATHINFO_EXTENSION );
$ext3 = pathinfo( $path3, PATHINFO_EXTENSION );
$ext4 = pathinfo( $path4, PATHINFO_EXTENSION );



$file_name = basename( $path, '.' . $ext );
$file_name1 = basename( $path1, '.' . $ext1 );
$file_name2 = basename( $path2, '.' . $ext2 );
$file_name3 = basename( $path3, '.' . $ext3 );
$file_name4 = basename( $path4, '.' . $ext4 );

$final_name =  $pro_name$sku.'img'.'.'.$ext;
$final_name1 = $pro_name$sku.'img1'.'.'.$ext1;
$final_name2 = $pro_name$sku.'img2'.'.'.$ext2;
$final_name3 = $pro_name$sku.'img3'.'.'.$ext3;
$final_name4 = $pro_name$sku.'img4'.'.'.$ext4;

move_uploaded_file( $path_tmp, '../admin/assets/img'.$final_name );
move_uploaded_file( $path_tmp1, '../admin/assets/img'.$final_name1 );
move_uploaded_file( $path_tmp2, '../admin/assets/img'.$final_name2 );
move_uploaded_file( $path_tmp3, '../admin/assets/img'.$final_name3 );
move_uploaded_file( $path_tmp4, '../admin/assets/img'.$final_name4 );

$f='../admin/assets/img'.$final_name;
$f1='../admin/assets/img'.$final_name1;
$f2='../admin/assets/img'.$final_name2;
$f3='../admin/assets/img'.$final_name3;
$f4='../admin/assets/img'.$final_name4;

$sql ="insert into product (pro_name,pro_brand,catagory,price,sku,pro_details,tags,mod_date,image,image1,image2,image3,image4)
values('$pro_name','$pro_brand','$catagory',$price,'$sku','$pro_details','$tags',CURRENT_TIMESTAMP,'$f','$f1','$f2','$f3','$f4')";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= manage_cat.php");



include 'assets/success.php';

}
else
{
	echo "failed";
}


?>
