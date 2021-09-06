<?php 
include "header.php";

include "navbar.php";
require "connection.php";
include "searchbox.php";
?>

<section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <?php 
                        $sql = "SELECT * FROM tables";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number"><?php echo $row['capacity'].' people'; ?></h2>
                                <span class="desc"><?php echo $row['table_name']; ?></span>

                                <div class="card">
                                    <div class="card-body">      
                                      
                                        <button type="button" class="btn btn-success">
                                            <a href="order.php?table_id=<?php echo $row['table_id'] ?>">
                                            <i class="fa fa-magic"></i>&nbsp; Serve
                                            </a>
                                        </button>
                                        
                                    </div>
                                </div>
                                
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                        
                    </div>
                </div>
            </section>
<?php include "footer.php"; ?>
