<?php 
include "header.php";

include "navbar.php";
require "connection.php";
?>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
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
                                        $role_id=isset($_GET['role_id']) && !empty(trim($_GET['role_id'])) ? htmlspecialchars(trim($_GET['role_id'])):null;

                                                $sql = "SELECT * FROM role WHERE role_id=$role_id ";
                                                $result = $conn->query($sql);
                                                
                                            while($row = $result->fetch_assoc()) {
                                             ?>
                                              <input type="hidden" name="role_id" value="<?php echo $role_id;  ?>">
                                              
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Role</label>
                                                <select id="cc-number" name="role" type="text" class="form-control cc-number identified visa" value="<?php echo $row['role']; ?>" data-val="true"
                                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">

                                                     <option>Select appropriate role</option>
                                                <?php 
                                                $sql = "SELECT * FROM role";
                                                $result = $conn->query($sql);
                                            while($rows = $result->fetch_assoc()) {
                                             ?>
                                        <option value="<?php echo $rows['role_id']; ?>"
                                        <?php if($row['role_id']==$rows['role_id']) echo 'selected="selected"'; ?> >
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