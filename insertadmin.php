<?php 
session_start();
 require 'connection.php';

 	$username=isset($_POST['username']) && !empty(trim($_POST['username'])) ? htmlspecialchars(trim($_POST['username'])):null;
 	$password=isset($_POST['password']) && !empty(trim($_POST['password'])) ? htmlspecialchars(trim($_POST['password'])):null;
 	$email=isset($_POST['email']) && !empty(trim($_POST['email'])) ? htmlspecialchars(trim($_POST['email'])):null;
 	$role=isset($_POST['role']) && !empty(trim($_POST['role'])) ? htmlspecialchars(trim($_POST['role'])):null;
 $address=isset($_POST['address']) && !empty(trim($_POST['address'])) ? htmlspecialchars(trim($_POST['address'])):null;
 $phone=isset($_POST['phone']) && !empty(trim($_POST['phone'])) ? htmlspecialchars(trim($_POST['phone'])):null;
 $salary=isset($_POST['salary']) && !empty(trim($_POST['salary'])) ? htmlspecialchars(trim($_POST['salary'])):null;
 
    $sql = "INSERT INTO admin(username,password,email,role,address,phone,salary) VALUES('${username}','${password}','${email}','${role}','${address}','${phone}','${salary}')";
   if (mysqli_query($conn, $sql)) {
  header("Location: manageadmin.php");
 	$_SESSION["adminadd"] = "success";

   	
  } else { 
  	header("Location: manageadmin.php");
 	$_SESSION["adminadd"] = "fail";
 
} 

mysqli_close($conn);
 ?>
        									


<?php include "footer.php"; ?>