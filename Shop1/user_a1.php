<?php include('session1.php'); ?>
<?php include('header1.php'); ?>

<?php include('admin/connect.php'); ?>

<body>
    <?php
    include('navtop1.php');
    ?>
    <div id="background">
        <?php
        include ('navbarfixed1.php');
        ?>

        <div id="page">
           <?php include ('nav_sidebar21.php');?>
            <div id="content">
                <div class="hero-unit-table"> 
                    <div id="header">
                    
                    </div>
                    <div id="body">



                        <h3>Senarai Produk</h3>
                        <p>
                        
						<?php include ('navbar_menu1.php');?>
						

                        </p>
                        <ul class="thumbnails">
                            <?php
                            $query = mysql_query("select * from tb_products WHERE category = 'Apple'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['productID'];
								$qty = $row['quantity'];
								
									$query1 = mysql_query("SELECT *,SUM(qty) as qty FROM order_details WHERE productID = '$id' AND status = 'Delivered'");
									$row1 = mysql_fetch_array($query1);
									$total_qty = $qty - $row1['qty'];									
                                ?>

                                <li class="span3">
                                    <div class="thumbnail">
                                        <img data-src="holder.js/300x200" alt="">
                                        <div class="alert alert-success"><div class="font1"><?php echo $row['name']; ?></div></div>
                                        <hr>


                                        <a  href="#<?php echo $id; ?>"   data-toggle="modal"><img src="admin/<?php echo $row['location'] ?>" class="img-rounded" alt="" width="160" height="200"></a>


                                        <p>
                                            <a> Harga(RM): <?php echo $row['price']; ?></a>
                                        </p>
                                     										<?php if($total_qty > 0){ ?>
                                        <a href="#add<?php echo $id; ?>"   data-toggle="modal" class="btn btn-success"><i class="icon-shopping-cart icon-large"></i>&nbsp;Add to Cart</a>
										<?php }else{ ?>
										<span class="label label-important">Habis stok</span>
										<?php } ?>
                                        <?php include('order_modal1.php'); ?>
                                    <?php } ?>
                                    <?php
                                    if (isset($_POST['order'])) {
                                        $member_id = $_POST['member_id'];
                                        $quantity = $_POST['quantity'];
                                        $price = $_POST['price'];
                                        $product_id = $_POST['product_id'];
                                        $total = $quantity * $price;
                                        mysql_query("insert into order_details (memberID,qty,productID,price,total,status) values('$member_id','$quantity','$product_id','$price','$total','Pending')") or die(mysql_query);
                                     /*    header('location:user_wines.php'); */
										?>
												<script>
																window.location = 'user_hand1.php';				
																</script>
										<?php
                                    }
                                    ?>
                        </ul>

                    </div>
                    <div id="footer">
                        <?php include('footer_user1.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php include('footer_bottom1.php'); ?>
</body>



</html>