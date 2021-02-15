<?php
include 'dbcon.php';
?>

<?php
session_start();


 $res = mysqli_query($conn, $sql) ;
unset($_SESSION['log_seller']);


    echo("<script>location.href = '../index.php';</script>");




?>