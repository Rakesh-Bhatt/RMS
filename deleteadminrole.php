<?php 
 require 'connection.php';
session_start();
 	$role_id=isset($_GET['role_id']) && !empty(trim($_GET['role_id'])) ? htmlspecialchars(trim($_GET['role_id'])):null;
 	
    $sql ="DELETE FROM role WHERE role_id=$role_id";
    echo $sql;
  $result =  mysqli_query($conn, $sql);
    if ( !$result ) {
  header("Location: manageadmin.php");
    	trigger_error('query failed', E_USER_ERROR);
    	$_SESSION["adminroledelete"] = "fail";
   	
  } else { 
  	header("Location: manageadmin.php");
 $_SESSION["adminroledelete"] = "success";
} 

mysqli_close($conn);
 ?>
        									


<?php include "footer.php"; ?>