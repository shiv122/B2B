<?php
include 'dbcon.php';

?>
<?php
// sql to delete a record
$sql = "DELETE FROM cart WHERE user='".$_SESSION['log_buyer']."' ";

if (mysqli_query($conn, $sql)) {
  header("Location: shoping-cart.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

?>