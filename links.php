<?php
	include("control.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding | Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet" type="text/css">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body id="page5">
<!--==============================header=================================-->
<?php
	include("include/menu.php");
?><!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_8">
          <div class="indent-right">
            <h2 class="indent-bot2">Login Form</h2>
            <form id="contact-form" action="login.php" method="post" enctype="multipart/form-data">
              <fieldset>
              
                <label><span class="text-form">Username</span>
                  <input name="user" type="text" required="required">
                </label>
                <label><span class="text-form">Password</span>
                  <input name="pass" type="password" required="required">
                </label>
                <label><span class="text-form">&nbsp;</span>
                  <input type="submit" name="login_sub" value="Log in" style="background:#999;border:#000                                     solid 1px;">
                </label>
              </fieldset>
            </form>
            
      
       
       
       <h5>New User ? <a href="register.php">Create Account Here</a></h5>
       <h5>Admin? <a href="adminlogin.php">Log in Here!  </a>
       </div>
        </article>
       
       
       
       
       
       
       
        <article class="grid_4">
          <div class="indent-left">
            <h2 class="indent-bot2">Contact Us</h2>
            <dl>
              <dt class="p2">70th Street between 31 x 32, Mandalay</dt>
              <dd><span>Telephone:</span> +95 9254239048</dd>
              <dd><span>Email:</span> <a href="#">CattleyaOnlineWeddingService@gmail.com</a></dd>
              <dd>Bank Account:  26632426600171801</dd>
              
              <br>
            </dl>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!--==============================footer=================================-->
<?php
	include("include/footer.php");
?>
</body>
</html>
<?php
 $_SESSION["user"]=$_POST["user"];
  $_SESSION["pass"]=$_POST["pass"];
 
?>