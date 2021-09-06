<?php 
 require 'connection.php';
session_start();
  $table_id=isset($_GET['table_id']) && !empty(trim($_GET['table_id'])) ? htmlspecialchars(trim($_GET['table_id'])):null;
  
    $sql ="DELETE FROM tables WHERE table_id=$table_id";
    echo $sql;
  $result =  mysqli_query($conn, $sql);
    if ( !$result ) {
  header("Location: managetable.php");
      trigger_error('query failed', E_USER_ERROR);
      $_SESSION["tabledelete"] = "fail";
  } else { 
    header("Location: managetable.php");
 $_SESSION["tabledelete"] = "success";
} 

mysqli_close($conn);
 ?>
                          


<?php include "footer.php"; ?>