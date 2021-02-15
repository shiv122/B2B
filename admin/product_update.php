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
$city=$_POST['city'];



$sql="UPDATE product set pro_name='$pro_name',pro_brand='$pro_brand',catagory='$catagory',price='$price',sku='$sku',pro_details='$pro_details', tags='$tags', available='$city' where id='".$_SESSION['product']."' ";

if (mysqli_query($conn,$sql)) 

{

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

     $sq="UPDATE  filter set
category='$category',
type='$type',
color='$color',
finishing_type='$finishing_type',
size='$size',
gauge='$gauge',
weight='$weight',
bidding='$bidding',
shape='$shape',
material='$material',
packing_type='$packing_type',
warranty_period='$warranty_period',
model_name='$model_name',
power_consumption='$power_consumption',
induction_friendly='$induction_friendly',
model='$model'
where product_id='".$_SESSION['product']."' ";

if (mysqli_query($conn,$sq)) 
{
	header("Location: 	panel-page-products.php");
}
else
{
	echo (mysqli_error($conn));
}	
}
else
{
	echo (mysqli_error($conn));
}









?>