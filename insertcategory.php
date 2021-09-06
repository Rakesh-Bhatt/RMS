<?php 
 require 'connection.php';

 	$category_name=isset($_POST['category_name']) && !empty(trim($_POST['category_name'])) ? htmlspecialchars(trim($_POST['category_name'])):null;
 	$description=isset($_POST['description']) && !empty(trim($_POST['description'])) ? htmlspecialchars(trim($_POST['description'])):null;

    $sql = "INSERT INTO category_product(name,description) VALUES('${category_name}','${description}')";
if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
 	header("Location: manageproduct.php");
 	$_SESSION["categoryadd"] = "success";
 }
  else {
     	header("Location: manageproduct.php");
     	$_SESSION["categoryadd"] = "fail";
  } 
mysqli_close($conn);
 ?>
        									


<?php include "footer.php"; ?>