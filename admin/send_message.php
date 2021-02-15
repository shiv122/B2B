<?php
include 'dbcon.php'

?>
<?php
//print_r($_POST);
$email=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['msg'];



                                        $sql1="SELECT *
FROM seller_buyer
where email='".$email."'
 ";
                                         $result1 = mysqli_query($conn ,$sql1);
                                         $row1 = mysqli_fetch_assoc($result1);


$sql="INSERT into inbox ( message,date_time,subject,too) values ('$msg',CURRENT_TIMESTAMP,'$sub','".$row1['id']."')";
if (mysqli_query($conn, $sql)) 
{
header("refresh:4;url= admin_inbox.php");



include 'assets/success.php';

}
else
{
	echo "failed";
}






?>