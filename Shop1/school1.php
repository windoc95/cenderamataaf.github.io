<?php include('header1.php'); ?>
<?php include('admin/connect.php'); ?>
<body>
    <?php
    include('navtop1.php');
    ?>
    <div id="background">
	
        <div id="page">
            <?php include ('nav_sidebar1.php');?>
            <div id="content">
                <div class="hero-unit-table"> 
                    <div id="header">
                       

                    </div>
                    <div id="body">


                        <h3>Senarai Produk</h3>
                        <p>
                        <?php include ('product_menu1.php');?>
                        </p>

                        <ul class="thumbnails">
                            <?php
                            $query = mysql_query("select * from tb_products WHERE category = 'T-Shirt'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['productID'];
                                ?>

                                <li class="span3">
                                    <div class="thumbnail">
                                        <img data-src="holder.js/300x200" alt="">
                                        <div class="alert alert-info"><div class="font1"><?php echo $row['name']; ?></div></div>
                                        <hr>


                                        <a  href="#<?php echo $id; ?>"   data-toggle="modal"><img src="admin/<?php echo $row['location'] ?>" class="img-rounded" alt="" width="160" height="200"></a>


                                        <p>
                                            <p> Harga(RM): <?php echo $row['price']; ?></p>
                                        </p>




                                    </div>
                                </li>

                                <!-- picture modal -->
                                <div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                    </div>
                                    <div class="modal-body">

                                        <div class="span2">

                                            <img src="admin/<?php echo $row['location']; ?>" width="200" height="200" class="img-rounded">      
                                        </div>
                                        <div class="span3">
											<p>Nama</p>
                                            <div class="alert alert-success">&nbsp;&nbsp;<?php echo $row['name'] ?></div>
											<p>Penyataan</p>
                                            <div class="alert alert-success">&nbsp;&nbsp;<?php echo $row['description'] ?></div>
											
                                            <div class="alert alert-success">&nbsp;&nbsp;&nbsp;&nbsp;Dari: <?php echo $row['originated'] ?> </div>
											<p>Harga(RM)</p>
                                            <div class="alert alert-success">&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['price'] ?></div>
                                            
                                        </div>





                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Tutup</button>
                                    </div>
                                </div>
                                <!-- end modal -->


                            <?php } ?>

                        </ul>






                    </div>
                    <div id="footer">
                        <?php include('footer1.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('footer_bottom1.php');
    ?>
</body>



</html>