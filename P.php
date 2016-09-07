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
<form  method="post" enctype="multipart/form-data">
                                <thead>
                                    <tr> 
									<div class="control-group">
                                    <label class="control-label" for="inputName">Name:</label>
                                    <div class="controls">
                                        <input type="text" name="Name" class = "form-control" placeholder="Name">
                                    </div>
                                </div>
									 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Email:</label>
                                           <input type="text" name="Email" class = "form-control" placeholder="Email">
                                          
                                 </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputContact_Number">Contact Number:</label>
                                    <div class="controls">
                                        <input type="text" name="Contact_Number"  class = "form-control" placeholder="Contact_Number" >
                                    </div>
                                </div>
								<div class="control-group" >
                                    <label class="control-label" for="inputAdress" >Address:</label>
                                    <div class="controls" >
                                        <input type="text" name="Address" class = "form-control" placeholder="Address" >
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputAdress" name="State1" placeholder="State1">State :</label>
												<select id="cmbMake" name="State1" >
												<option value="">Choose State</option>
												<option value="Sarawak">Sarawak</option>
												<option value="Sabah">Sabah</option>
												<option value="Perak">Perak</option>
												<option value="Selangor">Selangor</option>
												<option value="Johor bahru">Johor bahru</option>
												<option value="Terengganu">Terengganu</option>
												<option value="Melaka">Melaka</option>
												<option value="Pulau pinang">Pulau pinang</option>
												<option value="Kedah">Kedah</option>
												<option value="Kelantan">Kelantan</option>
												<option value="Kuantan">Kuantan</option>
												<option value="Perlis">Perlis</option>
												</select>		
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputAdress">City:</label>
                                    <div class="controls">
                                        <input type="text" name="City" class = "form-control" placeholder="City">
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputAdress">Pos Code:</label>
                                    <div class="controls">
                                        <input type="text" name="Poscode" class = "form-control" placeholder="Poscode">
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputAdress">Country:</label>
                                    <div class="controls">
                                        <input type="text" name="Country" class = "form-control" placeholder="Country">
                                    </div>
                                </div>
								
                                     <div class="control-group">
                                    <label class="control-label" for="inputImage">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image"> 	
                                    </div>
                                </div>
								
								<div class="pull-right">
											 <button name = "go" class="btn btn-primary">Send</button>
								</div>
								
								
								
								</form>						
								<?php
?>
								
				   <?php include ('admin/connect.php');
				   
				   
                            if (isset($_POST['go'])) {
							
							
								
								$Email = $_POST['Email'];
								$Name = $_POST['Name'];
                                $Contact_Number = $_POST['Contact_Number'];
                                $Address = $_POST['Address'];
								$City = $_POST['City'];
								$Poscode = $_POST['Poscode'];
								$State = $_POST['State1'];
								$Country = $_POST['Country'];
								
                                //image
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
//
                                move_uploaded_file($_FILES["image"]["tmp_name"], "admin/paymentcheck/A/" . $_FILES["image"]["name"]);
                                $Picture_Pay = "paymentcheck/A/" . $_FILES["image"]["name"];


                                mysql_query("insert into afterpay (Name,Email,Contact_Number,Address,City,Poscode,State,Country,Picture_Pay)
                            	values ('$Name','$Email','$Contact_Number','$Address','$City','$Poscode','$State','$Country','$Picture_Pay')
                                ") or die(mysql_error());

                                
                            }
                            ?>
								
								
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cart_table = mysql_query("select * from order_details where memberID='$ses_id' and status='Pending'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                        $order_id = $cart_row['orderid'];
                                        $product_id = $cart_row['productID'];
                                        $product_query = mysql_query("select * from tb_products where productID='$product_id'") or die(mysql_error());
                                        $product_row = mysql_fetch_array($product_query);
                                        ?>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>

                        <?php
                        if ($cart_count != 0) {
                            $result = mysql_query("SELECT sum(total) FROM order_details WHERE memberID='$ses_id' and status = 'Pending'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
                               
                                
								
								
                            <?php }
                            ?>
							 
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