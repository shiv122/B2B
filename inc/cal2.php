<?php
include 'dbcon.php'; 
session_start();
?>


<?php
$result = mysqli_query($conn, "SELECT SUM(quantity) AS qa FROM wishlist where user= '".$_SESSION['log_buyer']."'  "); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['qa'];
?>
<a href="wish.php"><i class="icon-heart"></i><span class="badge"><?php echo $sum; ?></span></a>
