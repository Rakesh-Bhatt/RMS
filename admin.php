<?php 
include "header.php";

include "navbar.php";
require "connection.php";
?>
<head>
<script type="text/javascript">
    function validation() {
        var username = document.signup.username.value;
        var password = document.signup.password.value;
        var email = document.signup.email.value;
        var address = document.signup.address.value;
        var phone = document.signup.phone.value;
        var salary = document.signup.salary.value;
        var role = document.signup.role.value;
        
        /* start validation for name */
        var namepattern = /^([a-z A-Z])+$/;
        if (username.trim() == '') {
            alert('Enter name');
            document.signup.username.focus();
            return false;
        } else if (!namepattern.test(username)) {
            alert('Name Must be in character Format');
            document.signup.username.focus();
            return false;
        } else if (username.length < 3) {
            alert('Name should be minimum 3 character');
            document.signup.username.focus();
            return false;
        }
        /* start validation for password */ 
            if (password.trim() == '') {
                alert('Enter Password');
                document.signup.password.focus();
                return false;
            }
        /* end validation for password */ 

        /* start validation for address */
        var addresspattern = /^([a-z A-Z 0-9])+$/;
        if (address.trim() == '') {
            alert('Enter address');
            document.signup.address.focus();
            return false;
        } else if (!addresspattern.test(address)) {
            alert('address must be in character Format');
            document.signup.address.focus();
            return false;
        } else if (address.length < 3) {
            alert('address should be minimum 3 character');
            document.signup.address.focus();
            return false;
        }
        /* Start validation for Email */
    var emailpattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (email.trim() == '') {
            alert('Enter Email');
            document.signup.email.focus();
            return false;
        } else if (!emailpattern.test(email)) {
            alert('Email Must be Email Format');
            document.signup.email.focus();
            return false;
        } else {
           alart("Enter email");
           document.signup.email.focus();
            return false;
        }
        /* end validation for Email */
        /* Start validation for phone */
        var phonepattern = /^([0-9]{10})+$/;
        if (phone.trim() == '') {
            alert('Enter Phone');
            document.signup.phone.focus();
            return false;
        } else if (phone.length < 10) {
            alert(' Phone should be 10 character');
            document.signup.phone.focus();
            return false;
        } else if (!phonepattern.test(phone)) {
            alert('Phone Must be Number with 10 Digit');
            document.signup.phone.focus();
            return false;
        }
        /* end validation for Phone */
        /* validation for salary */
            var salarypattern = /^([0-9])+$/;
        if (salary.trim() == '') {
            alert('Enter salary');
            document.signup.salary.focus();
            return false;
        } else if (salary.length < 3) {
            alert(' salary should be 3 character');
            document.signup.salary.focus();
            return false;
        } else if (!salarypattern.test(salary)) {
            alert('salary Must be Number format');
            document.signup.salary.focus();
            return false;
        }
         // end of salary 
           
    }
        
</script>
</head>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Table for adding Employee role -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Admin Role</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add your employee role here</h3>
                                        </div>
                                        <hr>
                                        <form action="insertrole.php" method="POST" novalidate="novalidate" >
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Employee Role</label>
                                                <input id="cc-name" name="role_type" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div>
                                          
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-user"></i>&nbsp;
                                                    <span id="payment-button-amount">Add Role</span>
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- table for adding employee -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Admin Information</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add your employee here</h3>
                                        </div>
                                        <hr>
                                        <form action="insertadmin.php" method="POST" novalidate="novalidate" onsubmit="return validation()" name="signup">
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Employee username</label>
                                                <input id="cc-name" name="username" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-password" class="control-label mb-1">Password</label>
                                                <input id="cc-password" name="password" type="password" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the secure password"
                                                    autocomplete="cc-password" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Address</label>
                                                <input id="cc-number" name="address" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-email" class="control-label mb-1">Email</label>
                                                <input id="cc-email" name="email" type="email" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Phone</label>
                                                <input id="cc-number" name="phone" type="number" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Salary</label>
                                                <input id="cc-number" name="salary" type="number" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Role</label>
                                                <select id="cc-number" name="role" type="text" class="form-control cc-number identified visa" data-val="true"
                                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                     <option selected="selected">Select appropriate role</option>
                                                     <?php 
                                                $sql = "SELECT * FROM role";
                                                $result = $conn->query($sql);
                                                // if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                             ?>
                                        <option value="<?php echo $row['role_id']; ?>"
                                        <?php if($row['role_type']) echo 'selected="selected"'; ?> >
                                        <?php echo $row['role_type']; ?>
                                            
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include "footer.php"; ?>