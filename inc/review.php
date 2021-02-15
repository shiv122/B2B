<?php include 'dbcon.php' ?>
<?php  

 $rate=$_POST['star'];
 $rv=$_POST['review'];
 $product=$_POST['product'];
 $user=$_POST['from'];



$sql="INSERT into review (product_id,review,r_star,user_id) values ('$product','$rv','$rate','$user')"; 
if (mysqli_query($conn, $sql)) 
{


}
else
{
	echo "failed";
}
?>