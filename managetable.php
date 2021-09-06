<?php 
include "header.php";

include "navbar.php";
require "connection.php";
include "searchbox.php";
$tableadd=$_SESSION['tableadd'];
$value = "success";
if($_SESSION['tableadd'] ==$value)
    {?>
    <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
        <span class="badge badge-pill badge-primary">Success</span>
        Your Table added successfully!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
            </button>
    </div>

<?php } ?>
<p><br></p>
<?php 
if($_SESSION['tableadd'] !=$value)  {?>
<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
  <span class="badge badge-pill badge-primary">fail</span>
        Your Table Can not added !!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
        </button>
</div>
<?php }?>
<!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Here are all your tables  List</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="table.php">
                                        <i class="zmdi zmdi-plus"></i>Add Table
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
                                            <th>Table Name</th>
                                            <th>description</th>
                                            <th>Capacity</th>
                                            <th>Send | Edit | Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                $sql = "SELECT * FROM tables";
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
                                            <td><?php echo $row['table_name']; ?></td>
                                            <td class="desc"><?php echo $row['description']; ?></td>
                                            <td><?php echo $row['capacity']; ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                <a href="edittable.php?table_id=<?php echo $row['table_id'] ?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                <a href="deletetable.php?table_id=<?php echo $row['table_id'] ?>">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                    </button>
                                                </div>
                                            </td>
                                        <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
 <?php include "footer.php" ?>