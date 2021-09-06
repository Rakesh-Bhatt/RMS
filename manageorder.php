<?php 
include "header.php";

include "navbar.php";
require "connection.php";
include "searchbox.php";
?>
<!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Here are all your current orders</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>Product Name</th>
                                            <th>Table name</th>
                                            <th>Quantity</th>
                                            <th>Sub total</th>
                                            <th>Send | Edit | Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                $sql = "SELECT o.order_id, t.table_name, p.item_name, o.quantity,o.sub_total
                                                    FROM ((Orders as o
                                                    INNER JOIN tables as t
                                                    ON o.table_id = t.table_id)
                                                    INNER JOIN product as p
                                                    ON o.product_id = p.product_id);";
                                                $result = $conn->query($sql);
                                                // if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                             ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><?php echo $row['item_name']; ?></td>
                                            <td><?php echo $row['table_name']; ?></td>
                                            <td><?php echo $row['quantity']; ?></td>
                                            <td><?php echo $row['sub_total']; ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <a href="editorder.php?order_id=<?php echo $row['order_id'] ?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                    <a href="deleteorder.php?order_id=<?php echo $row['order_id'] ?>">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                    </button>
                                                </div>
                                            </td>
                                            <?php }?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
 <?php include "footer.php" ?>