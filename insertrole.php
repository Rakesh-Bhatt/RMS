<?php 

 require 'connection.php';

 	$role_type=isset($_POST['role_type']) && !empty(trim($_POST['role_type'])) ? htmlspecialchars(trim($_POST['role_type'])):null;
 

    $sql = "INSERT INTO role(role_type) VALUES('${role_type}')";
   if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
header("Location: manageadmin.php");
 	$_SESSION["roleadd"] = "success";

 } else {
header("Location: manageadmin.php");
 	$_SESSION["roleadd"] = "fail";
     	}
mysqli_close($conn);
?>

<?php include "footer.php"; ?>