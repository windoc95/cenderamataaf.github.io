<?php include('header1.php'); ?>
<?php include('admin/connect.php'); 
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
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

                        <h3>MAN'OB</h3>
                        <div class="signup">
                            <a href="signup1.php" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Daftar</a>
                        </div>
                        <hr>

                        <div class="row-fluid">
                            <div class="span12">

                                <div class="row-fluid">
                                    <div class="span2"></div>
                                    <div class="span8">
                                        <ul class="thumbnails">
                                            <li class="span12">
                                                <div class="thumbnail">
                                                    <img data-src="holder.js/300x200" alt="">
                                                    <form class="form-horizontal" method="post">
                                                        <div class="alert alert-success"><strong>Borang masuk pelangan</strong></div>
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputEmail">Email</label>
                                                            <div class="controls">
                                                                <input type="text" id="inputEmail" name="username" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputPassword">Katalaluan</label>
                                                            <div class="controls">
                                                                <input type="password" id="inputPassword" name="password" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="controls">

                                                                <button type="submit" class="btn btn-primary" name="login"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
                                                            </div>
                                                            <br>
                                                            <?php
                                                            if (isset($_POST['login'])) {
    function clean($str) {
                                        $str = @trim($str);
                                        if (get_magic_quotes_gpc()) {
                                            $str = stripslashes($str);
                                        }
                                        return mysql_real_escape_string($str);
										}
										
                                                                $username = clean($_POST['username']);
                                                                $password = clean($_POST['password']);

                                                                $query = mysql_query("select * from tb_member where Email='$username' and Password='$password' ") or die(mysql_error());
                                                                $count = mysql_num_rows($query);
                                                                $row = mysql_fetch_array($query);
                                                                if ($count > 0) {
                                                                   
																	
                                                                    $_SESSION['id'] = $row['memberID'];
																	?>
																	<script>
																		window.location = 'user_school1.php';				
																</script>

												  
												  <?php
																	session_write_close();
                                                                } else {
																session_write_close();
                                                                    ?>

                                                                    <div class="alert alert-error">Tolong semak pengesahan</div>
                                                                <?php }
                                                            }
                                                            ?>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>

                                        </ul>





                                    </div>
                                    <div class="span2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
                <div id="footer">
<?php include('footer1.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include('footer_bottom1.php');
    ?>
</body>



</html>