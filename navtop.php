   <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <div class="pull-right">
                <form name="clock">
                    <i id="clock" class="icon-time"></i>
                    <input  class="span2" id="trans" type="submit"  name="face" value="">
                </form>
            </div>
            <div class="date">
                <i class="icon-calendar " id="clock"></i>
                <?php
                $Today = date('y:m:d');
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>
            </div>
			<div id="lg">
			 <a href=shop1/index1.php name="submit"/>
             <img alt="f" src="images/1.jpg" width="30" height="30" /></div>
            <div class="welcome">
            </div>
        </div>
    </div>