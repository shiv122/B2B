<?php include 'dbcon.php'; ?>
<?php

$id=$_POST['id'];
$sql="UPDATE orders set ord_cancel_st='2' where order_id='$id' ";
if (mysqli_query($conn,$sql)) 
{
	
}
else
{
	echo ('error=>'.mysqli_error($conn));
}

?>