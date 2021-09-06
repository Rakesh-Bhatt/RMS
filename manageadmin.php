<?php 
include "header.php";

include "navbar.php";
require "connection.php";
include "searchbox.php";
?>
<!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <!-- Start of role -->
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Here are all your admins  List</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="admin.php">
                                        <i class="zmdi zmdi-plus"></i>Add admin role
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
                                            <th>Admin Role</th>
                                            <th>Edit | Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                $sql = "SELECT * from role";
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
                                            <td><?php echo $row['role_type']; ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <a href="editadminrole.php?role_id=<?php echo $row['role_id'] ?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                    <a href="deleteadminrole.php?role_id=<?php echo $row['role_id'] ?>">
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

                    <!-- End the role part -->
                      <!-- Start of admin -->
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Here are all your admins  List</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="admin.php">
                                        <i class="zmdi zmdi-plus"></i>Add admin
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
                                            <th>Admin Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Salary</th>
                                            <th>Send | Edit | Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                $sql = "SELECT a.admin_id, a.username,a.email,a.address,a.phone,a.salary,r.role_type
                                                    FROM admin as a
                                                    INNER JOIN role as r
                                                    ON a.role = r.role_id";
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
                                            <td><?php echo $row['username']; ?></td>
                                            <td class="desc"><?php echo $row['email']; ?></td>
                                            <td>
                                                        <span class="role admin"><?php echo $row['role_type']; ?></span>
                                                    </td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['salary']; ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <a href="editadmin.php?admin_id=<?php echo $row['admin_id'] ?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                    <a href="deleteadmin.php?admin_id=<?php echo $row['admin_id'] ?>">
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
                      <!-- End of role -->
                </div>
            </section>
 <?php include "footer.php" ?>