<?php
    include("control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Register Page</title>
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
            <h2 class="indent-bot2">Register Form</h2>
            <form id="contact-form" action="customerInfo.php" method="post" enctype="multipart/form-data">
              <fieldset>
              <label><span class="text-form">User Name</span><input name="name" type="text" placeholder="Enter your name" required>
              </label>
               <label><span class="text-form">Password</span><input name="password" type="password" placeholder="Enter your password"    required="required">
              </label>
                <label><span class="text-form">Email</span>
                <input name="email" type="email" required="required"   placeholder="name@gmail.com">
                </label>
                
                <label><span class="text-form">Mobile</span>
                 <input name="mobile" type="tel" required="required" pattern="[0-9]{11}" placeholder="09254269048">
               </label>
                <label><span class="text-form">Address</span>
                  <input name="address" type="text" placeholder="Enter your address" required="required">
              </label>
                <label><span class="text-form">Date</span>
                <input name="date" type="date" required="required" pattern="\d{1,2]/\d{1,2}/\d{4}}" placeholder="dd/mm/yyyy">
                </label>
                <label><span class="text-form">
                 <input type="submit" name="reg_sub" value="register" style="background:pink ;border:#000 solid 1px;"></label>
               
              </fieldset>
            </form>
           
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
