<?php 
include "header.php";

include "navbar.php";
require 'connection.php';
?>
<head>
    <script type="text/javascript">
        // validation for category form
        function validation()
        {
            var category_name = document.category.category_name.value;
            var description = document.category.description.value;

            //validation for category  name
            var namepattern = /^([a-z A-Z])+$/;
            if (category_name.trim() == '') {
                alert('Enter category name');
                document.category.category_name.focus();
                return false;
            } else if (!namepattern.test(category_name)) {
                alert('category name Must be in character Format');
                document.category.category_name.focus();
                return false;
            } else if (category_name.length < 3) {
                alert('category name should be minimum 3 character');
                document.category.category_name.focus();
                return false;
            }
            /* end validation for name */
            
            //validation for description
            var descriptionpattern = /^([a-z A-Z])+$/;
            if (description.trim() == '') {
                alert('Enter description name');
                document.category.description.focus();
                return false;
            } else if (!descriptionpattern.test(description)) {
                alert('description name Must be in character Format');
                document.category.description.focus();
                return false;
            } else if (description.length < 5) {
                alert('description should be minimum 5 character');
                document.category.description.focus();
                return false;
            }      
        }
        // validation for product form
         function validate()
        {
            var product_name = document.product.product_name.value;
            var description = document.product.description.value;
            var price = document.product.price.value;
            var category = document.product.category.value;
            var status = document.product.status.value;
            //validation for supplier  name
            var namepattern = /^([a-z A-Z])+$/;
            if (product_name.trim() == '') {
                alert('Enter product name');
                document.product.product_name.focus();
                return false;
            } else if (!namepattern.test(product_name)) {
                alert('product name Must be in character Format');
                document.product.product_name.focus();
                return false;
            } else if (product_name.length < 3) {
                alert('product name should be minimum 3 character');
                document.product.product_name.focus();
                return false;
            }
            /* end validation for name */
            //validation for description
            var descriptionpattern = /^([a-z A-Z])+$/;
            if (description.trim() == '') {
                alert('Enter descriptions');
                document.product.description.focus();
                return false;
            } else if (!descriptionpattern.test(description)) {
                alert('Company name Must be in character Format');
                document.product.description.focus();
                return false;
            } else if (description.length < 3) {
                alert('Company name should be minimum 3 character');
                document.product.description.focus();
                return false;
            }
            /* validation for price */
            var priceparttern = /^([0-9])+$/;
            if (price.trim() == '') {
                alert('Enter price');
                document.product.price.focus();
                return false;
            } else if (oldprice < 0) {
                alert(' oldprice should positive');
                document.product.price.focus();
                return false;
            } else if (!priceparttern.test(price)) {
                alert('oldprice Must be Number in number');
                document.product.price.focus();
                return false;
            }
            /* Start validation for maincategory */
            if (document.product.category.selectedIndex == 0) {
                alert('Select main category');
                document.product.category.focus();
                return false;
            }
            //End the validation for Product
            /* Start validation for status */
            if (document.product.status.selectedIndex == 0) {
                alert('Select status');
                document.product.status.focus();
                return false;
            }
            //End the validation for Product
        }
    </script>

</head>
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
                                        <form action="insertcategory.php" method="POST" novalidate="novalidate" onsubmit="return validation()" name="category">
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Category name</label>
                                                <input id="cc-pament" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required="">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">description</label>
                                                <input id="cc-name" name="description" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>                              
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" value="submit">
                                                    <i class="fab fa-cuttlefish"></i>&nbsp;
                                                    <span id="payment-button-amount">Add category</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End of the product category form -->
                            <!-- start of the product form -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">product Information</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add your product here</h3>
                                        </div>
                                        <hr>
                                        <form action="insertproduct.php" method="POST" novalidate="novalidate" onsubmit="return validate()" name="product">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Product name</label>
                                                <input id="cc-pament" name="product_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">description</label>
                                                <input id="cc-name" name="description" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Price</label>
                                                <input id="cc-number" name="price" type="number" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
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
                                            while($row = $result->fetch_assoc()) {
                                             ?>
                                    <option value="<?php echo $row['category_product']; ?>"
                                        <?php if($row['name']) echo 'selected="selected"'; ?> >
                                        <?php echo $row['name']; ?>
                                            
                                        </option>
                                        <?php }?>
                                                </select>
                                                <!-- <input id="cc-number" name="cc-number" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number"> -->
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>


                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">status</label>
                                                <select id="cc-number" name="status" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                    <option value="active">Active</option>
                                                    <option value="deactive">Deactive</option>
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                                                      
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" value="submit">
                                                    <i class="fab fa-product-hunt"></i>&nbsp;
                                                    <span id="payment-button-amount">Add product</span>
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include "footer.php"; ?>