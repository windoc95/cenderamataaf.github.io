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
                        <h3>Payment</h3>
                        <div class="hero-unit-table">

                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <td><li>CDM Account no : 134423232323</l>
										<li> <label for="Manufacturer"> Pos : </label>
												<select id="cmbMake" name="Make" >
												<option value="1">--Any--</option>
												<option value="2">Sarawak or Sabah</option>
												<option value="3">Semenanjung Malaysia</option>
												</select>

												<input type="submit" name="price1" value="Submit"/></li></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cart_table = mysql_query("select * from order_details where memberID='$ses_id' and status='Pending'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                        $order_id = $cart_row['orderid'];
                                        $product_id = $cart_row['productID'];
                                        $product_query = mysql_query("select * from tb_products where productID='$product_id '") or die(mysql_error());
                                        $product_row = mysql_fetch_array($product_query);
                                        ?>
                                <?php } ?>
								
									<?
									
								    if (isset($_POST['submit'])) {

                                $price = $_POST['price'];

                                mysql_query("update order_details set price='$price' where productID='$get_id'") or die(mysql_query());
                               
                            }
							?>

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
							 <div class="pull-right"><a href="P.php" role="button" class="btn btn-success"><i class="icon-truck icon-large"></i>&nbsp;After Payment?</a> </div>
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