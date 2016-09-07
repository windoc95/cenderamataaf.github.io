<?php include ('session.php');?>	
<?php include ('header.php');?>	
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">MAN'OB</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      						
					 Welcome : Administrator
                    </a>
                  
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
						
						
						<div class="hero-unit-table">   
                             <table class="table table-striped table-bordered table-hover table-condensed" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Confirm Table</strong>
                                </div>
								    <ul class="breadcrumb"> 
										<li>Orders<span class="divider">/</span></li>				
										<li  class="active">Pending Orders<span class="divider">/</span></li>
										<li><a href="delivered.php">Delivered</a> <span class="divider">/</span></li>
									
									</ul>
                                <thead>
                                    <tr>
                                       
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Address</th>
										<th>City</th>
										<th>Pos Codes</th>
										<th>State</th>
										<th>Country</th>
										<th>Date</th>
                                        <th>Picture Receive</th>
												
										
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php include ('connect.php');
                                    $SELECT=mysql_query("SELECT * FROM afterpay ") or die("Select error:".mysql_error());
									while($row=mysql_fetch_array($SELECT)) {
									$id = $row['payid'];
                                        $Name = $row['Name'];
										$Email = $row['Email'];
										$Contact_Number = $row['Contact_Number'];
										$Address = $row['Address'];
										$City = $row['City'];
										$Poscode = $row['Poscode'];
										$State = $row['State'];
										$Country = $row['Country'];
										$Date = $row['Date'];
										?>

                                        <tr>   
                                            <td><?php echo $Name; ?></td>
                                            <td><?php echo $Email; ?></td>
                                            <td><?php echo $Contact_Number; ?></td>
                                            <td><?php echo $Address; ?></td>
											<td><?php echo $City; ?></td>
											<td><?php echo $Poscode; ?></td>
											<td><?php echo $State; ?></td>
											<td><?php echo $Country; ?></td>
											<td><?php echo $Date; ?> </td>
											<td><a href="#<?php echo $id; ?>" data-toggle="modal"><img src="<?php echo $row['Picture_Pay'] ?>" class="img-rounded" alt="" width="160" height="200"></a></td>	   
								
											
                                        </tr>
                     
                                            <!-- product delete modal -->
                                  
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
                
				
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>

