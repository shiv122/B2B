<?php include 'dbcon.php' ?>
<?php  


$sql="SELECT * from wishlist where user=2";
$res=mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) 
{
while ($row = mysqli_fetch_assoc($res))
{
$sql2="INSERT into cart (product,user,quantity) values ('".$row['product']."',".$row['user']."',".$row['quantity']."')";
if (mysqli_query($conn, $sql2)) 
{
	$sql3 = "DELETE FROM cart WHERE user=2";
    $re=mysqli_query($conn, $sql3);
}
}

}
else
{
	echo "failed";
}
?>