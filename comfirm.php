<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include 'admin/connect.php'; ?>
<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">
        <?php
        include ('navbarfixed.php');
        ?>

        <div id="page">
            <?php include ('nav_sidebar2.php');?>
            <div id="content">
                <div class="hero-unit-table">
                    <div id="header">
                      

                    </div>
                    <div id="body">
                        <h3>Comfirm Payment</h3>
                        <div class="hero-unit-table">

                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                    </tr>
									
                                </thead>
								
                                <tbody>
								
	
                                    <?php
                                    $cart_table = mysql_query("select  * from order_details where memberID='$ses_id' and status='Pending'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                        $order_id = $cart_row['orderid'];
                                        $product_id = $cart_row['productID'];
                                        $product_query = mysql_query("select * from tb_products where productID='$product_id'") or die(mysql_error());
                                        $product_row = mysql_fetch_array($product_query);
                                        ?>

                                        <tr>
                                            <td><?php echo $product_row['name']; ?></td>
                                            <td><?php echo $cart_row['price']; ?></td>
                                            <td><?php echo $cart_row['qty']; ?></td>
                                            <td><?php echo $cart_row['total']; ?></td>
                                          
                                        </tr>
                                        <!-- product delete modal -->
                                    <div id="orderdel<?php echo $order_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                  
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="romove_item.php<?php echo '?id=' . $order_id; ?>" ><i class="icon-check icon-large"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;No</button>

                                        </div>
                                    </div>
                                    <!-- end delete modal -->

                                <?php } ?>

                                </tbody>
                            </table>




                        </div>

                        <?php
                        if ($cart_count != 0) {
                            $result = mysql_query("SELECT sum(total) FROM order_details WHERE memberID='$ses_id' and status = 'Pending'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
                               
                                <div class="pull-left">
                                    <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Price have to Pay:&nbsp;<?php echo $rows['sum(total)']; ?></div></div>
                                </div>
								
								
                            <?php }
                            ?>
							 <div class="pull-right"><a href="cdm.php" role="button" class="btn btn-success"><i class="icon-truck icon-large"></i>&nbsp;Payments with CDM</a> </div>
                            <?php
                        }
                        ?>
                    

                   
                    </div>
                    <div id="footer">
<?php include('footer_user.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer_bottom.php'); ?>
</body>
</html>