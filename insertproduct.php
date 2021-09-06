<?php 
 require 'connection.php';
// grab the data that are sent from the forms
//  if ( isset( $_GET['submit'] ) ){

// if ( isset( $_GET['category_name'] ) && !empty(trim($_GET['category_name']))){
//  	$category_name = $_GET['category_name']; 
//  }
//  if ( isset( $_GET['description'] ) && !empty(trim($_GET['description']))){
//  	$description = $_GET['description']; 
//  }
 	$product_name=isset($_POST['product_name']) && !empty(trim($_POST['product_name'])) ? htmlspecialchars(trim($_POST['product_name'])):null;
 	$description=isset($_POST['description']) && !empty(trim($_POST['description'])) ? htmlspecialchars(trim($_POST['description'])):null;
 	$price=isset($_POST['price']) && !empty(trim($_POST['price'])) ? htmlspecialchars(trim($_POST['price'])):null;
 	$category=isset($_POST['category']) && !empty(trim($_POST['category'])) ? htmlspecialchars(trim($_POST['category'])):null;
 $status=isset($_POST['status']) && !empty(trim($_POST['status'])) ? htmlspecialchars(trim($_POST['status'])):null;
 
 // if($category_name != null && $description != null){
    $sql = "INSERT INTO product(item_name,description,price,category,status) VALUES('${product_name}','${description}','${price}','${category}','${status}')";
  
   if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
 	header("Location: manageproduct.php");
 	$_SESSION["productadd"] = "success";
 }
  else {
     	header("Location: manageproduct.php");
     	$_SESSION["productadd"] = "fail";
  } 
mysqli_close($conn);
 ?>
        									


<?php include "footer.php"; ?>