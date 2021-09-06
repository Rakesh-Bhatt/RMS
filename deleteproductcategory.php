<?php 
 require 'connection.php';
session_start();
 	$category_product=isset($_GET['category_product']) && !empty(trim($_GET['category_product'])) ? htmlspecialchars(trim($_GET['category_product'])):null;
 	
    $sql ="DELETE FROM category_product WHERE category_product=$category_product";
    echo $sql;
  $result =  mysqli_query($conn, $sql);
    if ( !$result ) {
  header("Location: manageproduct.php");
    	trigger_error('query failed', E_USER_ERROR);
    	$_SESSION["productcategorydelete"] = "fail";
   	
  } else { 
  	header("Location: manageproduct.php");
 $_SESSION["productcategorydelete"] = "success";
} 

mysqli_close($conn);
 ?>
        									


<?php include "footer.php"; ?>