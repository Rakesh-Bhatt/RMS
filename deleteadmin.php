<?php 
session_start();
 require 'connection.php';
 	$admin_id=isset($_GET['admin_id']) && !empty(trim($_GET['admin_id'])) ? htmlspecialchars(trim($_GET['admin_id'])):null;
    $sql ="DELETE FROM admin WHERE admin_id=$admin_id";
    echo $sql;
  $result =  mysqli_query($conn, $sql);
    if ( !$result ) {
  header("Location: manageadmin.php");
    	trigger_error('query failed', E_USER_ERROR);
    	$_SESSION["admindelete"] = "fail";
   	
  } else { 
  	header("Location: manageadmin.php");
 $_SESSION["admindelete"] = "success";
} 

mysqli_close($conn);
 ?>
        									


<?php include "footer.php"; ?>