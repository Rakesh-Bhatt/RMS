<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="index.php">
                            <img class="logomitjee" src="images/icon/mitjeelogo.png"  alt="mitjeeadmin" height: 50px; width: 150px; />
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
                                    <a class="js-acc-btn" href="#"><?php echo $fetch_info['name'] ?></a>
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
                                                <a href="#"> <?php echo $fetch_info['name'] ?></a>
                                            </h5>
                                            <span class="email"><?php echo $fetch_info['email'] ?></span>
                                        </div>
                                    </div>
                                   
                                    <div class="account-dropdown__footer">
                                        <a href="logout.php">
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
                            <a class="js-acc-btn" href="#"><?php echo $fetch_info['name'] ?></a>
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
                                        <a href="#"><?php echo $fetch_info['name'] ?></a>
                                    </h5>
                                    <span class="email"><?php echo $fetch_info['email'] ?></span>
                                </div>
                            </div>
                            
                            <div class="account-dropdown__footer">
                                <a href="logout.php">
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
            <!-- section for search-->
            <!-- <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
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
            </section> -->
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span><h2> <?php echo $fetch_info['name'] ?></h2></span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>