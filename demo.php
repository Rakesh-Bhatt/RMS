<?php 
session_start();
 require 'connection.php';


 // Code for insert into orders table 
  $table_id = isset($_GET['table_id']) && !empty(trim($_GET['table_id'])) ? htmlspecialchars(trim($_GET['table_id'])):null;
  $product_id = isset($_GET['product_id']) && !empty(trim($_GET['product_id'])) ? htmlspecialchars(trim($_GET['product_id'])):null;
  $quantity = isset($_GET['quantity']) && !empty(trim($_GET['quantity'])) ? htmlspecialchars(trim($_GET['quantity'])):null;

//code for get from orders table
 // initialization of product_id
 $product = 0;
 $checkquery = "SELECT p.product_id,o.quantity,k.table_id,o.key_id
              FROM orders as o
              INNER JOIN product as p
              ON o.product_id=p.product_id 
              Inner JOIN keytable as k
              ON o.key_id = k.key_id
              WHERE table_id=$table_id AND o.product_id=$product_id";
                // echo $checkquery; //working query
                $result = $conn->query($checkquery);
                while($rows = $result->fetch_assoc())
                {
                  $product = $rows['product_id'];//the product in cart
                  $quantity1 = $rows['quantity'];
                  $key_id = $rows['key_id'];
                  echo "product_id"."$product</br>";
                  echo "quantity"."$quantity</br>";
                  echo "key"."$key_id</br>";
                }
                  if($product==$product_id)
                  {
                      $newquantity= $quantity1+$quantity;
                      echo $sqlupdate = "UPDATE orders SET quantity='$newquantity' WHERE key_id=$key_id AND product_id='$product_id'";
                           if (mysqli_query($conn, $sqlupdate)) {
                          header("Location: order.php?table_id=$table_id");
                          $_SESSION["orderplace"] = "success";
                          } else { 
                            header("Location: order.php?table_id=$table_id");
                          $_SESSION["orderplace"] = "fail";
                          } 
                  } 
                if ($product==0) {
                   // echo $product; //this is initialized product 
                  /* this insert is done because of the normalization in the database since there
    is no place to store the table id in the orders table instead we have to store the 
     key id in orders and we do not have the key id at first*/
  echo $sqlinsert = "INSERT INTO keytable(table_id) VALUES('${table_id}')";
  /* now we have inserted the table_id in keytable 
    now its time to retrive the key id of corrosponding table_id
  */
  echo $selectquery = "SELECT key_id from keytable where table_id=$table_id";
  $r = $conn->query($selectquery);
                while($row = $r->fetch_assoc()) 
                {
                  $key = $row['key_id'];
                }
                echo "key"."$key<br>";
                /*
now we have the key id for corrosponding table_id now we can finally add a new item to the order table.
*/
echo $insertquery = "INSERT INTO `orders`(`key_id`, `product_id`, `quantity`) VALUES ('${key}','${product_id}','${quantity}')";
   if (mysqli_query($conn, $insertquery)) {
  header("Location: order.php?table_id=$table_id");
  $_SESSION["orderplace"] = "success";
     } else { 
    header("Location: order.php?table_id=$table_id");
  $_SESSION["orderplace"] = "fail";
    } 
 
}
mysqli_close($conn);
 ?>           