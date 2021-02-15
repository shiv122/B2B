<?php
include 'dbcon.php';
error_reporting(0);
?>
<?php
$i=0;
//  $f='../admin/assets/img/un1.jpg';
// $f1='../admin/assets/img/un1.jpg';
// $f2='../admin/assets/img/un1.jpg';
// $f3='../admin/assets/img/un1.jpg';
// $f4='../admin/assets/img/un1.jpg';
$by=$_POST['by'];
$pro_name= $_POST['pro_name'];
$pro_brand= $_POST['pro_brand'];
$catagory= $_POST['catagory'];
$price= $_POST['price'];
$sku= $_POST['sku'];
$pro_details= $_POST['pro_details'];
$tags= $_POST['tags'];
$city=$_POST['city'];
$sub=$_POST['sub'];
$qt=$_POST['qt'];
$pathc=$_FILES['file1']['name'];
$path_tmpc = $_FILES['file1']['tmp_name'];

if (isset($_FILES['photo']['name'])) {
    # code...

    $path = $_FILES['photo']['name'];

    $path_tmp = $_FILES['photo']['tmp_name'];

    $ext = pathinfo( $path, PATHINFO_EXTENSION );

    $file_name = basename( $path, '.' . $ext );

    $final_name =  $pro_name.'_'.$sku.'img'.'.'.$ext;

    move_uploaded_file( $path_tmp, '../admin/assets/img'.$final_name );


    $f='../admin/assets/img'.$final_name;

}
else
{
    $f='';
}

$sql ="insert into product (pro_name,pro_brand,catagory,price,sku,pro_details,tags,mod_date,image,seller,available,sub_cat,available_product)

values('$pro_name','$pro_brand','$catagory',$price,'$sku','$pro_details','$tags',CURRENT_TIMESTAMP,'$f','$by','$city','$sub','$qt')";

if (mysqli_query($conn, $sql)) 
{
    //   header("refresh:8;url= panel-page-products-create.php");
    // include 'assets/success.php';
}








$sll="SELECT * from product ORDER BY id DESC
LIMIT 1";
$result1 = mysqli_query($conn , $sll);
$rowl = mysqli_fetch_assoc($result1);



if (isset($_POST['material'])) 
{
    $material=$_POST['material'];
}
else{
    $material='';
}
if (isset($_POST['type'])) 
{
    $type=$_POST['type'];
}
else{
    $material='';
}
if (isset($_POST['color'])) 
{
    $color=$_POST['color'];

}
else{
    $color='';
}
if (isset($_POST['finishing_type'])) 
{
    $finishing_type=$_POST['finishing_type'];
}
else{
    $finishing_type='';
}
if (isset($_POST['size'])) 
{
    $size=$_POST['size'];
}
else{
    $size='';
}
if (isset($_POST['gauge'])) 
{
    $gauge=$_POST['gauge'];
}
else{
    $gauge='';
}
if (isset($_POST['weight'])) 
{
    $wieght=$_POST['weight'];
}
else{
    $weight='';
}
if (isset($_POST['model_name'])) 
{
    $model_name=$_POST['model_name'];
}
else{
    $model_name='';
}
if (isset($_POST['bidding'])) 
{
    $bidding=$_POST['bidding'];
}
else{
    $bidding='';
}
if (isset($_POST['shape'])) 
{
    $shape=$_POST['shape'];
}
else{
    $shape='';
}
if (isset($_POST['packing_type'])) 
{
    $packing_type=$_POST['packing_type'];
}
else{
    $packing_type='';
}
if (isset($_POST['warranty_period'])) 
{
    $warranty_period=$_POST['warranty_period'];
}
else{
    $warranty_period='';
}
if (isset($_POST['power_consumption'])) 
{
    $power_consumption=$_POST['power_consumption'];
}
else{
    $power_consumption='';
}
if (isset($_POST['induction_friendly'])) 
{
    $induction_friendly=$_POST['induction_friendly'];
}
else{
    $induction_friendly='';
}
if (isset($_POST['model'])) 
{
    $model=$_POST['model'];
}
else{
    $model='';
}

$sq="INSERT into filter (
category,
type,
color,
finishing_type,
size,
gauge,
weight,
bidding,
shape,
material,
packing_type,
warranty_period,
model_name,
power_consumption,
induction_friendly,
model,
product_id)
values('$catagory','$type','$color','$finishing_type','$size','$gauge','$weight','$bidding','$shape','$material','$packing_type','$warranty_period','$model_name','$power_consumption','$induction_friendly','$model','".$rowl['id']."') 
";

if (mysqli_query($conn, $sq)) {


    if (isset($_FILES['file1']['name'])) {
    # code...

        $i=0;
        $pathc=$_FILES['file1']['name'];
        $path_tmpc = $_FILES['file1']['tmp_name'];

        for($i=0;$i<=count($pathc);$i++)
        {
           
           if ($i==count($pathc)) {
            header("refresh:4;url= panel-page-products-create.php");
            include 'assets/success.php';
            break;
        }


        $ext1 = pathinfo( $pathc[$i], PATHINFO_EXTENSION );

        $file_name1 = basename( $pathc[$i], '.' . $ext1 );
        $a=rand(100,999);
        $final_name1 =  $a.'img'.$i.'.'.$ext1;

        echo "<br>file".$final_name1;
        echo "<br>i".$i;
        echo "count".count($pathc);

        move_uploaded_file( $path_tmpc[$i], '../admin/assets/img/product/Img'.$final_name1 );


        $f1='../admin/assets/img/product/Img'.$final_name1;

        $sqlw="INSERT into product_img (for_prd,path_m)
        values ('".$rowl['id']."','$f1')";
        $resw = mysqli_query($conn ,$sqlw);






    }
}



}
else
{
    echo ("failed".mysqli_error($conn));
}



?>