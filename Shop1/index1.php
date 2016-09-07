<?php
include('header1.php');
?>
<body class="home blog custom-background" style> 
    <?php
    include('navtop1.php');
    ?>

    <div id="background">

        <div id="page">

            <?php include ('nav_sidebar1.php');?>

            <div id="content">
			
                <div class="hero-unit-table">                        <!-- image slider -->
                    <div class="slider-wrapper theme-default">

                        <div id="slider" class="nivoSlider">
                            <img src="admin/images/banner1.jpg" data-thumb="images/toystory.jpg" alt="" />
                            <img src="admin/images/bag1.jpg" data-thumb="images/toystory.jpg" alt="" />
                            <img src="admin/images/bag2.jpg" data-thumb="images/wineries.jpg" alt="" />
                            <img src="admin/images/bag3.jpg"  alt="" data-transition="slideInLeft" />
                           
                        </div>

                     
                    </div>
                    <!-- end slider -->
			<hr/>
			<center><h3 class = "center alert alert-success" style = "width:500px; font-weight:Bolder;">Barang Baru</h3></center>
                    <div id="body">

                        <div class="body">
                            <ul>
                                <li>
								
                                    <a class="figure" href="#pic1" data-toggle = "modal"><img class = "image-rounded"src="pics/HANDBAG/bags1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a class="figure" href="#pic2" data-toggle = "modal" ><img class = "image-rounded"src="pics/SCHOOL/bagS1.jpg" alt=""></a>

                                </li>
                                <li>
                                    <a class="figure" href="#pic3" data-toggle = "modal" ><img class = "image-rounded" src="pics/TRAVEL/bagT1.jpg" alt=""></a>

                                </li>
                                <li>
                                    <a class="figure"  href="#pic4" data-toggle = "modal" ><img class="img-rounded" src="pics/TRAVEL/bagT2.jpg" alt=""></a>         
                                </li>

                            </ul>

                          <?php include ('modal_latest1.php');?>
                        </div>

                    </div>
                    <div id="footer">
                        <?php include('footer1.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer_bottom1.php') ?>
</body>
</html>