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
                                    <div class="card-header">product Information</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add your product here</h3>
                                        </div>
                                        <hr>
                                        <form action="updateproduct.php" method="POST" novalidate="novalidate">
                                            <?php 
                                            $product_id=isset($_GET['product_id']) && !empty(trim($_GET['product_id'])) ? htmlspecialchars(trim($_GET['product_id'])):null;

                                                $sql = "SELECT * FROM product WHERE product_id=$product_id ";
                                                $result = $conn->query($sql);
                                                
                                            while($row = $result->fetch_assoc()) {
                                             ?>
                                             <input type="hidden" name="product_id" value="<?php echo $product_id;  ?>">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Product name</label>
                                                <input id="cc-pament" name="product_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['item_name']; ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">description</label>
                                                <input id="cc-name" name="description" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" value="<?php echo $row['description']; ?>" 
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Price</label>
                                                <input id="cc-number" name="price" type="number" class="form-control cc-number identified visa" value="<?php echo $row['price']; ?>" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">status</label>
                                                <select id="cc-number" name="status" type="text" class="form-control cc-number identified visa" data-val="true"
                                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                    <option value="active" 


                                                    <?php if($row['status']=='active') echo 'selected';
                                                    ?>>

                                                Active</option>
                                                    <option value="deactive"
                                                    <?php if($row['status']=='deactive') echo 'selected';
                                                    ?>>Deactive</option>
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">category</label>
                                                <select id="cc-number" name="category" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">

                                                    <option>Select appropriate category</option>
                                                    <?php 
                                                $sql = "SELECT * FROM category_product";
                                                $result = $conn->query($sql);
                                                // if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($rows = $result->fetch_assoc()) {
                                                //  $category = $rows['name'];
                                                // echo "your category is ".$category;
                                             ?>
                                    <option value="<?php echo $rows['category_product']; ?>"
                                        <?php if($row['category']==$rows['category_product']) echo 'selected="selected"'; ?> >
                                        <?php echo $rows['name']; ?>
                                            
                                        </option>
                                        <?php }?>
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>     
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" value="submit">
                                                    <i class="fab fa-product-hunt"></i>&nbsp;
                                                    <span id="payment-button-amount">Add product</span>
                                                    
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