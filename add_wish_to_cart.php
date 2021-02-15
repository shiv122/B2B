<?php include 'dbcon.php' ?>
<?php
session_start();

$sql="SELECT * from wishlist where user='".$_SESSION['log_buyer']."' ";
$res=mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0)
{
while ($row = mysqli_fetch_assoc($res))
{
$sql2="INSERT into cart (product,user,quantity) values ('".$row['product']."','".$row['user']."','".$row['quantity']."')";
if (mysqli_query($conn, $sql2))
{
	$sql3 = "DELETE FROM wishlist WHERE user='".$_SESSION['log_buyer']."'";
    $re=mysqli_query($conn, $sql3);
    header("Location: index.php");
}
else
{
	echo "failed in 2";
}
}

}
else
{
	echo "failed";
}
?>
