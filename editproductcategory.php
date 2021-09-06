<?php 
include "header.php";

include "navbar.php";
require 'connection.php';
?>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Category Information</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add your Category here</h3>
                                        </div>
                                        <hr>
                                        <form action="updateproductcategory.php" method="POST" novalidate="novalidate">
                                            <?php 
                                            $category_product=isset($_GET['category_product']) && !empty(trim($_GET['category_product'])) ? htmlspecialchars(trim($_GET['category_product'])):null;

                                                $sql = "SELECT * FROM category_product WHERE category_product=$category_product ";
                                                $result = $conn->query($sql);
                                                
                                            while($row = $result->fetch_assoc()) {
                                             ?>
                                             <input type="hidden" name="category_product" value="<?php echo $category_product;  ?>">
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Category name</label>
                                                <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['name']; ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">description</label>
                                                <input id="cc-name" name="description" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" value="<?php echo $row['description']; ?>" 
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>                              
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" value="submit">
                                                    <i class="fab fa-cuttlefish"></i>&nbsp;
                                                    <span id="payment-button-amount">Add category</span>
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