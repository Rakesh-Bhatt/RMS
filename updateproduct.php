<?php 

 require 'connection.php';

 $product_id = isset($_POST['product_id']) && !empty(trim($_POST['product_id'])) ? htmlspecialchars(trim($_POST['product_id'])):null;
 	$product_name = isset($_POST['product_name']) && !empty(trim($_POST['product_name'])) ? htmlspecialchars(trim($_POST['product_name'])):null;
 	$description = isset($_POST['description']) && !empty(trim($_POST['description'])) ? htmlspecialchars(trim($_POST['description'])):null;
 	$price = isset($_POST['price']) && !empty(trim($_POST['price'])) ? htmlspecialchars(trim($_POST['price'])):null;
 	$category = isset($_POST['category']) && !empty(trim($_POST['category'])) ? htmlspecialchars(trim($_POST['category'])):null;
 $status = isset($_POST['status']) && !empty(trim($_POST['status'])) ? htmlspecialchars(trim($_POST['status'])):null;
 

    $sql = "UPDATE product SET item_name='$product_name',description='$description',price='$price',category='$category',status='$status' WHERE product_id='$product_id'";
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