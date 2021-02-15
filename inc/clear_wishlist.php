<?php
include 'dbcon.php';

?>
<?php
session_start();
// sql to delete a record
$sql = "DELETE FROM wishlist WHERE user= '".$_SESSION['log_buyer']."' ";

if (mysqli_query($conn, $sql)) {
  header("Location: ../wish.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

?>