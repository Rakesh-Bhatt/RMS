<?php 
session_start();
 require 'connection.php';

  $table_id = isset($_POST['table_id']) && !empty(trim($_POST['table_id'])) ? htmlspecialchars(trim($_POST['table_id'])):null;
  
  $table_name=isset($_POST['table_name']) && !empty(trim($_POST['table_name'])) ? htmlspecialchars(trim($_POST['table_name'])):null;
  
  $description=isset($_POST['description']) && !empty(trim($_POST['description'])) ? htmlspecialchars(trim($_POST['description'])):null;

  $capacity=isset($_POST['capacity']) && !empty(trim($_POST['capacity'])) ? htmlspecialchars(trim($_POST['capacity'])):null;



    $sql = "UPDATE tables SET table_name='$table_name',description='$description',capacity='$capacity' where table_id='$table_id'";

    // echo $sql; for testing
   if (mysqli_query($conn, $sql)) {
  header("Location: managetable.php");
  $_SESSION["updatetable"] = "success";
 }
  else {
      header("Location: managetable.php");
      $_SESSION["updatetable"] = "fail";
  } 

mysqli_close($conn);
 ?>
<?php include "footer.php"; ?>