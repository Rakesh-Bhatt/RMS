<?php 
include "header.php";

include "navbar.php";
require "connection.php";
?>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- table for adding employee -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Admin Information</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add your employee here</h3>
                                        </div>
                                        <hr>
                                        <form action="updateadmin.php" method="POST" novalidate="novalidate">
                                            <?php 
                                        $admin_id=isset($_GET['admin_id']) && !empty(trim($_GET['admin_id'])) ? htmlspecialchars(trim($_GET['admin_id'])):null;

                                                $sql = "SELECT * FROM admin WHERE admin_id=$admin_id ";
                                                $result = $conn->query($sql);
                                                
                                            while($row = $result->fetch_assoc()) {
                                             ?>
                                              <input type="hidden" name="admin_id" value="<?php echo $admin_id;  ?>">

                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Employee username</label>
                                                <input id="cc-name" name="username" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['username']; ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-password" class="control-label mb-1">Password</label>
                                                <input id="cc-password" name="password" type="password" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the secure password" value="<?php echo $row['password']; ?>" 
                                                    autocomplete="cc-password" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-email" class="control-label mb-1">Email</label>
                                                <input id="cc-email" name="email" type="email" class="form-control cc-number identified visa" value="<?php echo $row['email']; ?>" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Address</label>
                                                <input id="cc-name" name="address" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['address']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Phone</label>
                                                <input id="cc-name" name="phone" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['phone']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Salary</label>
                                                <input id="cc-name" name="salary" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['salary']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Role</label>
                                                <select id="cc-number" name="role" type="text" class="form-control cc-number identified visa" data-val="true"
                                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">

                                                     <option>Select appropriate role</option>
                                                <?php 
                                                $sql = "SELECT * FROM role";
                                                $result = $conn->query($sql);
                                            while($rows = $result->fetch_assoc()) {
                                             ?>
                                        <option value="<?php echo $rows['role_id']; ?>"
                                        <?php if($row['role']==$rows['role_id']) echo 'selected="selected"'; ?> >
                                        <?php echo $rows['role_type']; ?>
                                            
                                        </option>
                                        <?php }?>
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>

                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-user"></i>&nbsp;
                                                    <span id="payment-button-amount">Add Employee</span>
                                                    
                                                </button>
                                            </div>
                                            <?php } ?>
                                        </form>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include "footer.php"; ?>