<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `patient_dr1` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: dr1admin.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>