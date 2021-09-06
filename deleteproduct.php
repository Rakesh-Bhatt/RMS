<?php 
require 'connection.php';
session_start();
 	$product_id=isset($_GET['product_id']) && !empty(trim($_GET['product_id'])) ? htmlspecialchars(trim($_GET['product_id'])):null;
 	
  $sql ="DELETE FROM product WHERE product_id=$product_id";
    echo $sql;
  $result =  mysqli_query($conn, $sql);
    if ( !$result ) {
  header("Location: manageproduct.php");
    	trigger_error('query failed', E_USER_ERROR);
    	$_SESSION["productdelete"] = "fail";
      
  } else { 
  	header("Location: manageproduct.php");
 $_SESSION["productdelete"] = "success";
} 

mysqli_close($conn);
 ?>
        									


<?php include "footer.php"; ?>