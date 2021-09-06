<?php 
include "header.php";

include "navbar.php";
require "connection.php";
// session_start();
?>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>menu List</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>Item</td>
                                                    <td>Price</td>
                                                    <td>Quantity</td>
                                                    <td>Order Now</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php 
                                                    $table_id = isset($_GET['table_id']) && !empty(trim($_GET['table_id'])) ? htmlspecialchars(trim($_GET['table_id'])):null;
                                                    $_SESSION["table_id"]=$table_id;
                                                    $_SESSION["a"]="hello";
                                                    $sql = "SELECT * FROM product";
                                                    $result = $conn->query($sql);
                                                    while($row = $result->fetch_assoc()) {
                                                    ?>
                                                <tr>
                                                    <td>
                                                        <div class="table-data__info">
                                                        <h6><?php echo $row['item_name']; ?></h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['price']; ?>
                                                    </td>
                                            <!-- Starting of the form -->
                                            <div>
                                                <form method="GET" action="addordertocart.php">
                                                    <td>
                                                        <div class="row form-group">
                                                                <div class="col-8">
                                                                    <input type="text" class="form-control" name="quantity">
                                                                </div>
                                                        </div>
                                                         </td>
                                                            <input type="hidden" name="table_id" value="<?php echo $table_id; ?>">
                                                            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                                            <!-- End of the form -->
                                                                                    <td>
                                                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                                                <!-- <div class="card-body">  for scrollable menu-->
                                                            <button class="btn btn-danger btn-sm"> Order </button>
                                                            </div>
                                                        </td>
                                                    </form>
                                                 </div>
                                                </tr>
                                            <?php } ?>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                            <!-- End of the menu  -->
                           
                            <!-- start of the customer order -->

                            <div class="col-lg-6">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">Customer order appears here</h3>
                                    <form action="bill.php" method="POST" class="form-horizontal">
                                    <div class="table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <td>S.N.</td>
                                                    <td>Product</td>
                                                    <td>Quantity</td>
                                                    <td>Rate</td>
                                                    <td>Amount</td>
                                                    <td>Edit|DELETE</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $i=1;
                                                    $subtotal = 0;
                                                    $sql = "SELECT o.order_id,o.key_id,p.item_name,o.quantity,p.price,k.table_id
                                                    FROM orders as o
                                                    INNER JOIN product as p
                                                    ON o.product_id=p.product_id 
                                                    Inner JOIN keytable as k
                                                    ON o.key_id = k.key_id
                                                    WHERE table_id=$table_id";
                                                    // echo $sql;
                                                    $result = $conn->query($sql);
                                                    while($rows = $result->fetch_assoc()) {
                                                    ?>
                                                    <!-- hide the data in input -->
                        <input type="hidden" name="key_id" value="<?php echo $rows['key_id']; ?>">
                        <input type="hidden" name="item_name<?php echo $i; ?>" value="<?php echo $rows['item_name']; ?>">
                        <input type="hidden" name="quantity<?php echo $i; ?>" value="<?php echo $rows['quantity']; ?>">
                        <input type="hidden" name="price<?php echo $i; ?>" value="<?php echo $rows['price']; ?>">

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $rows['item_name']; ?></td>
                                                    <td><?php echo $rows['quantity']; ?></td>
                                                    <td><?php echo $rows['price']; ?></td>
                                                    <td><?php echo $rows['price']*$rows['quantity'] ;?>
                                                    </td>
                                                    <?php $subtotal += $rows['price']*$rows['quantity']; ?>
                                                    <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <a href="editorder.php?order_id=<?php echo $rows['order_id'] ?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                    <a href="deleteorder.php?order_id=<?php echo $rows['order_id'];?>">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                    </button>
                                                </div>
                                                    </td>
                                                </tr>
                                                <?php $i++; } ?>
                                                <tr>
                                                    <td colspan="5">
                                                <!-- card for total value -->
                                        <div class="card">
                                         <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Sub Total:</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                <input type="text" id="input-normal" name="" class="form-control" disabled="" value="<?php echo $subtotal; ?>">
                                                
                                                <input type="hidden" name="subtotal" value="<?php echo $subtotal; ?>">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">13% VAT</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="" class="form-control" disabled="" value="<?php echo $subtotal*0.13; ?>"> 
                                                    <?php $newtotal=$subtotal+$subtotal*0.13; ?>
                                                    <input type="hidden" name="vat" value="<?php echo $subtotal*0.13; ?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Service Charge</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="" class="form-control" disabled="" value="<?php echo $subtotal*0.10; ?>">
                                                <?php $newtotal=$newtotal+$subtotal*0.1;?>
                                                    <input type="hidden" name="servicecharge" value="<?php echo $subtotal*0.10; ?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Discount</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="discount" class="form-control" disabled="" value="100">
                                                    <?php $newtotal=$newtotal-100; ?>
                                                    <input type="hidden" name="discount" value="100">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Grand Total</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="" class="form-control" disabled="" value="<?php echo $newtotal; ?>">

                                                    <input type="hidden" name="total" value="<?php echo $newtotal; ?>">
                                                </div>
                                            </div>
                                    </div>
                                    <input type="hidden" name="totalitem" value="<?php echo$i; ?>">
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" value="submit">
                                            <i class="fa fa-dot-circle-o"></i> Generate Bill
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Change
                                        </button>
                                    </div>
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>