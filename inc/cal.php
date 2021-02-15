<?php
include 'dbcon.php'; 
?>


<?php
session_start();
$result = mysqli_query($conn, "SELECT SUM(quantity) AS qa FROM cart where user= '".$_SESSION['log_buyer']."'  "); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['qa'];
?>
<a href="shoping-cart.php"><i class="icon-add-to-cat"></i><span class="badge"><?php echo $sum; ?></span></a>
