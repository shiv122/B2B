<?php 
include 'dbcon.php';
?>
<?php 
$p=$_POST['id'];
$us=$_POST['us'];
$value=$_POST['value'];
$sql="UPDATE cart set quantity=$value where id=$p ";
 $res = mysqli_query($conn ,$sql);
?>