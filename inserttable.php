<?php 
session_start();
 require 'connection.php';

 	$table_name=isset($_POST['table_name']) && !empty(trim($_POST['table_name'])) ? htmlspecialchars(trim($_POST['table_name'])):null;
 	
 	$description=isset($_POST['description']) && !empty(trim($_POST['description'])) ? htmlspecialchars(trim($_POST['description'])):null;

 	$capacity=isset($_POST['capacity']) && !empty(trim($_POST['capacity'])) ? htmlspecialchars(trim($_POST['capacity'])):null;

    $sql = "INSERT INTO tables(table_name,description,capacity) VALUES('${table_name}','${description}','${capacity}')";
   if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
 	header("Location: index.php");
 	$_SESSION["tableadd"] = "success";
 }
  else {
     	header("Location: index.php");
     	$_SESSION["tableadd"] = "fail";
  } 

mysqli_close($conn);
 ?>
<?php include "footer.php"; ?>