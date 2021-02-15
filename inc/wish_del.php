<?php
include 'dbcon.php';

?>
<?php

$sql = "DELETE FROM wishlist WHERE id= '".$_GET['id']."' ";

if (mysqli_query($conn, $sql)) {
  header("Location: ../wish.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

?>