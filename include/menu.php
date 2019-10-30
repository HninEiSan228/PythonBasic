<?php
	error_reporting(0);
?>
<header>
  <div class="main">
    <h1><img src="images/logo.jpg" height="100px" width="250px"></h1>
    <h5 align="right" style="margin-top:-50px;"><?php
    			//session_start();
				if(isset($_SESSION['uname']))
				{
					echo "Welcome ".$_SESSION['uname'];
				}
				else
				{
					echo "Welcome Guest";	
				}
				
				?></h5>
                <h6 style="margin-left:880px;"><a href="cart.php">
                <?php
				$u=$_SESSION['uname'];
				$sel="select count(*) as ord_total from order_tbl where username='$u' and ord_date=curdate() and status='order'";
		$qq=mysql_query($sel);
		$fe=mysql_fetch_array($qq);
				
				?>
                </a></h6>
  </div>
  
  <div class="menu-row">
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
          <div class="grid_12">
            <nav>
            <?php
				
				if(isset($_SESSION['uname']))
				{
				?>
                <ul class="menu">

	             <li><a href="logout.php">Home</a></li>
	             <li><a href="services.php">Services</a></li>
                <li><a href="index.php">Register</a></li>
                <li><a href="partners.php">About</a></li>
                </ul>
                <?php		
				}
				else
				{
			?>
              <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="wedding.php">Services</a></li>
                <li><a href="links.php">Log in</a></li>
                <li><a href="album.php">About</a></li>
              </ul>
              <?php
				}
			  ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>