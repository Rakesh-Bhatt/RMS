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
                                    <div class="card-header">Table Information</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Edit your table here</h3>
                                        </div>
                                        <hr>
                                        
                                        <form action="updatetable.php" method="post" novalidate="novalidate">
                                            <?php 

                                        $table_id=isset($_GET['table_id']) && !empty(trim($_GET['table_id'])) ? htmlspecialchars(trim($_GET['table_id'])):null;

                                                $sql = "SELECT * FROM tables WHERE table_id=$table_id ";
                                                $result = $conn->query($sql);
                                                
                                            while($row = $result->fetch_assoc()) {
                                             ?>
                                             <input type="hidden" name="table_id" value="<?php echo $table_id;  ?>">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Table name</label>
                                                <input id="cc-pament" name="table_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['table_name']; ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Table capacity</label>
                                                <input id="" name="capacity" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" value="<?php echo $row['capacity']; ?>" 
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Table description</label>
                                                <input id="cc-text" name="description" type="text" class="form-control cc-number identified visa" value="<?php echo $row['description']; ?>" data-val="true" 
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update table</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        
                                        </form>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include "footer.php"; ?>