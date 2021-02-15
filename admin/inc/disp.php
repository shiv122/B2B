<?php include 'dbcon.php'; ?>
<?php

$id=$_GET['id'];

$sql="UPDATE orders set dispatched='1' where order_id='".$id."' ";
if (mysqli_query($conn, $sql))

{
	echo "Success";
}
else
{
	echo ("failed".mysqli_error($conn));
}

 ?>