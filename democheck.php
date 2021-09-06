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
        }
        /* end validation for Email */
        
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

        /* Start validation for phone */
        var phonepattern = /^([0-9]{10})$/;
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
        } else {
            alert('Enter Phone');
            document.signup.phone.focus();
         }
        /* end validation for Phone */
        /* validation for salary */
            var salarypattern = /^([0-9])+$/;
            if (salary.trim() == '') {
                alert('Enter salary');
                document.signup.salary.focus();
                return false;
            } else if (oldprice < 0) {
                alert(' salary should positive');
                document.signup.salary.focus();
                return false;
            } else if (!salarypattern.test(salary)) {
                alert('salary Must be Number in number');
                document.signup.salary.focus();
                return false;
            }else {
            alert('Enter salary');
            document.signup.salary.focus();
         }
            // end of salary 
            /* Start validation for role */
            if (document.signup.role.selectedIndex == 0) {
                alert('Select role');
                document.signup.role.focus();
                return false;
            }
            //End the validation for role





            <!-- this is navigation bars -->
            <body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <!--start list for order -->
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Order
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="manageorder.php">Manage order</a>
                                    </li>
                                </ul>
                            </li>
                            <!--start list for order -->
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Tables
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="table.php">Add table</a>
                                    </li>
                                    <li>
                                        <a href="managetable.php">Manage table</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Admin
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="admin.php">Add admin</a>
                                    </li>
                                    <li>
                                        <a href="manageadmin.php">Manage admin</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Product
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="product.php">Add Product</a>
                                    </li>
                                    <li>
                                        <a href="manageproduct.php">Manage Product</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Pending Bills</a>
                            </li>
                            <li>
                                <a href="managesales.php">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Sales</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="header__tool">
                       
                        
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                   
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- mobile view  for responsive window-->
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Order
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="manageorder.php">Manage order</a>
                                    </li>
                                </ul>
                            </li>
                            <!--start list for order -->
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Tables
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="table.php">Add table</a>
                                    </li>
                                    <li>
                                        <a href="managetable.php">Manage table</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Admin
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="admin.php">Add admin</a>
                                    </li>
                                    <li>
                                        <a href="manageadmin.php">Manage admin</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Product
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="product.php">Add Product</a>
                                    </li>
                                    <li>
                                        <a href="manageproduct.php">Manage Product</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Pending Bills</a>
                            </li>
                            <li>
                                <a href="managesales.php">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Sales</a>
                            </li>
                            
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">john doe</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">john doe</a>
                                    </h5>
                                    <span class="email">johndoe@example.com</span>
                                </div>
                            </div>
                            
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <!-- <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div> -->
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>John!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>