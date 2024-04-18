<?php
  include "db_conn.php";
  
  $sl= "SELECT `ID`, `first_name`, `last_name`, `gender`, `contact`, `date`, `time`, `status` FROM `patient_dr2` WHERE 1 ";

  $id=$_GET['ID'];
  $STATUS = $_GET['status'];
// Update the status in the database
  $sql="UPDATE patient_dr1 SET  status='$STATUS' WHERE ID=$id";
   $result = mysqli_query($conn, $sql);
   // Redirect back to the original page
  header('location : dr2admin.php');

?>


