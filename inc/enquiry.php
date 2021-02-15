<?php include 'dbcon.php'; ?>
<?php
$name=$_POST['name'];
$enq=$_POST['enquiry'];
$product=$_POST['product'];
$email=$_POST['email'];
if (isset($_POST['from'])) {
	$from=$_POST['from'];

}
else
{
	$from='';
}

$sql="INSERT INTO product_enquiry (name,product_id,msg,from_us,time_s,email)
values ('$name','$product','$enq','$from',CURRENT_TIMESTAMP,'$email')
";
if (mysqli_query($conn ,$sql)) {
	echo "done";
}
else
{
	echo "failed";
}


 ?>