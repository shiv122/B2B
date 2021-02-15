<?php
include 'dbcon.php';
?>

<?php
session_start();

 $sql="UPDATE users set status=0 where id='".$_GET['id']."' ";
 $res = mysqli_query($conn, $sql) ;
unset($_SESSION['log_user']);


    echo("<script>location.href = '../index.php';</script>");




?>