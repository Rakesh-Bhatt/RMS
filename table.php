<?php 
include "header.php";

include "navbar.php";
?>
<head>
    <script type="text/javascript">
         function validation()
        {
            var table_name = document.table.table_name.value;
            var description = document.table.description.value;
            var capacity = document.table.capacity.value;
            //validation for supplier  name
            var namepattern = /^([a-z A-Z 0-9])+$/;
            if (table_name.trim() == '') {
                alert('Enter table name');
                document.table.table_name.focus();
                return false;
            } else if (!namepattern.test(table_name)) {
                alert('table name Must be in character Format');
                document.table.table_name.focus();
                return false;
            } else if (table_name.length < 3) {
                alert('table name should be minimum 3 character');
                document.table.table_name.focus();
                return false;
            }
            /* end validation for name */
            //validation for description
            var descriptionpattern = /^([a-z A-Z])+$/;
            if (description.trim() == '') {
                alert('Enter descriptions');
                document.table.description.focus();
                return false;
            } else if (!descriptionpattern.test(description)) {
                alert('Company name Must be in character Format');
                document.table.description.focus();
                return false;
            } else if (description.length < 3) {
                alert('Company name should be minimum 3 character');
                document.table.description.focus();
                return false;
            }
            /* validation for capacity */
            var capacitypattern = /^([0-9])+$/;
            if (capacity.trim() == '') {
                alert('Enter capacity');
                document.table.capacity.focus();
                return false;
            } else if (oldprice < 0) {
                alert(' capacity should positive');
                document.table.capacity.focus();
                return false;
            } else if (!capacitypattern.test(capacity)) {
                alert('capacity Must be Number');
                document.table.capacity.focus();
                return false;
            }
        }
    </script>

</head>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Table Information</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add your table here</h3>
                                        </div>
                                        <hr>
                                        <form action="inserttable.php" method="POST" novalidate="novalidate" onsubmit="return validation()" name="table">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Table name</label>
                                                <input id="cc-pament" name="table_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Table description</label>
                                                <input id="cc-number" name="description" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Table capacity</label>
                                                <input id="cc-name" name="capacity" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-table"></i>&nbsp;
                                                    <span id="payment-button-amount">Add table</span>
                                                    
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