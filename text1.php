<?php include 'dbcon.php' ?>
<?php  
session_start();

$sql="SELECT * from wishlist where user='1' ";
$res=mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) 
{
while ($row = mysqli_fetch_assoc($res))
{


$query= "SELECT * from cart where user='1' AND product='".$row['product']."' ";

$res1 = mysqli_query($conn ,$query);

 if (mysqli_num_rows($res1) > 0)
{ 
	echo $query;
	$row1 = mysqli_fetch_assoc($res1);
    $qt1=$row1['quantity']+1;
	$sql1="UPDATE cart set quantity='$qt1'";
	if ( mysqli_query($conn ,$sql1)) {
		$sql3 = "DELETE FROM wishlist WHERE user='1'";
    $re=mysqli_query($conn, $sql3);
	}
	
}

else
{
$sql2="INSERT into cart (product,user,quantity) values ('".$row['product']."','".$row['user']."',1)";
if (mysqli_query($conn, $sql2)) 
{
	$sql3 = "DELETE FROM wishlist WHERE user='1'";
    $re=mysqli_query($conn, $sql3);
}	
}


}

}
else
{
	echo "failed";
}
?>