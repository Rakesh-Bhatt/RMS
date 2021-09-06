<?php 
 require 'connection.php';
session_start();
 	$order_id=isset($_GET['order_id']) && !empty(trim($_GET['order_id'])) ? htmlspecialchars(trim($_GET['order_id'])):null;
  
 echo  $table_id = $_SESSION['table_id'];
    $sql ="DELETE FROM orders WHERE order_id=$order_id";
    echo $sql;
  $result =  mysqli_query($conn, $sql);
    if ( !$result ) {
  header("Location: order.php?table_id=$table_id");
    	trigger_error('query failed', E_USER_ERROR);
    	$_SESSION["orderdelete"] = "fail";
 	
  } else { 
  	header("Location: order.php?table_id=$table_id");
 $_SESSION["orderdelete"] = "success";
} 

mysqli_close($conn);
 ?>
        									


<?php include "footer.php"; ?>