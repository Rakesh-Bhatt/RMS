<?php
 require 'connection.php';
$i=1;
while ($i < $_GET['totalitem']) {
echo $_GET['item_name'.$i];
echo"<br>";
echo $_GET['quantity'.$i];
echo"<br>";
echo $_GET['price'.$i];
echo"<br>";
	
$i++;
}
echo $_GET['subtotal'];
echo"<br>";
echo $_GET['vat'];
echo"<br>";
echo $_GET['servicecharge'];
echo"<br>";
echo $_GET['discount'];
echo"<br>";
echo $_GET['total'];
echo"<br>";
	$key_id=isset($_GET['key_id']) && !empty(trim($_GET['key_id'])) ? htmlspecialchars(trim($_GET['key_id'])):null;
 	$date="2020-10-20";
 	$subtotal=isset($_GET['subtotal']) && !empty(trim($_GET['subtotal'])) ? htmlspecialchars(trim($_GET['subtotal'])):null;
 	$vat=isset($_GET['vat']) && !empty(trim($_GET['vat'])) ? htmlspecialchars(trim($_GET['vat'])):null;
 	$discount=isset($_GET['discount']) && !empty(trim($_GET['discount'])) ? htmlspecialchars(trim($_GET['discount'])):null;
 	$total=isset($_GET['total']) && !empty(trim($_GET['total'])) ? htmlspecialchars(trim($_GET['total'])):null;
 	
 
 // if($category_name != null && $description != null){
    $sql = "INSERT INTO sales(order_id,date,sub_total,vat,discount,total) VALUES('${order_id}','${date}','${subtotal}','${vat}','${discount}','${total}')";
    echo $sql;  
 //   if (mysqli_query($conn, $sql)) {
 //  // echo "New record created successfully";
 // 	header("Location: index.php");
 // 	$_SESSION["salesadd"] = "success";
 // }
 //  else {
 //     	header("Location: index.php");
 //     	$_SESSION["salesadd"] = "fail";
 //  } 
mysqli_close($conn);
 ?>
        									


<?php include "footer.php"; ?>