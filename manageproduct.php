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
                            <h3 class="title-5 m-b-35">Here are all your products  List</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="product.php">
                                        <i class="zmdi zmdi-plus"></i>Add product
                                    </a>
                                    </button>
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
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Edit | Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                $sql = "SELECT * from category_product;";
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

                                            <td><?php echo $row['name']; ?></td>
                                            <td class="desc"><?php echo $row['description']; ?>
                                                
                                            </td>
                                            <td>
                                                <div class="table-data-feature">

                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                <a href="editproductcategory.php?category_product=<?php echo $row['category_product'] ?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                <a href="deleteproductcategory.php?category_product=<?php echo $row['category_product'] ?>">
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




                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Here are all your products  List</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="product.php">
                                        <i class="zmdi zmdi-plus"></i>Add product
                                    </a>
                                    </button>
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
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Send | Edit | Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                $sql = "SELECT p.product_id, p.item_name,p.description,p.price,c.name,p.status
                                                    FROM product as p
                                                    INNER JOIN category_product as c
                                                    ON p.category=c.category_product;";
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
                                            <td class="desc"><?php echo $row['description']; ?>
                                                
                                            </td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td>
                                                <span class="role admin"><?php echo $row['name']; ?></span>
                                            </td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td>
                                                <!-- <div class="table-data-feature">

                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                <a href="editproduct.php?product_id=<?php echo $row['product_id'] ?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                <a href="deleteproduct.php?product_id=<?php echo $row['product_id'] ?>">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                    </button>
                                                </div> -->
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