<?php 

 require 'connection.php';

 $category_product = isset($_POST['category_product']) && !empty(trim($_POST['category_product'])) ? htmlspecialchars(trim($_POST['category_product'])):null;
 	$name = isset($_POST['name']) && !empty(trim($_POST['name'])) ? htmlspecialchars(trim($_POST['name'])):null;
 	$description = isset($_POST['description']) && !empty(trim($_POST['description'])) ? htmlspecialchars(trim($_POST['description'])):null;

    $sql = "UPDATE category_product SET name='$name',description='$description'WHERE category_product='$category_product'";
   	print_r($sql);
   if (mysqli_query($conn, $sql)) {
  header("Location: manageproduct.php");
 	$_SESSION["productupdate"] = "success";

   	
  } else { 
  	header("Location: manageproduct.php");
 	$_SESSION["productupdate"] = "fail";
 
} 

mysqli_close($conn);
 ?>						


<?php include "footer.php"; ?>