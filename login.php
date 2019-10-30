<?php
    session_start();
?>
<html>
<head>
<style>
a{
    text-decoration:none;
}
.order{margin-left: 1000px;width:10%;height:5%;background:#f00058;border:#000                                     solid 1px;}

.logOut{margin-left: 1000px;width:5%;height:5%;background:#f00058;border:#000                                     solid 1px;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}


.row {
  content: "";
  clear: both;
  display: table;
}

</style>
</head> 
<body>


<?php
  $userName=$_POST['user'];
  $password=$_POST['pass'];
  $_SESSION['user']=$userName;
  
  $connection=mysql_connect("localhost","root","") Or die("Couldn’t connect to database");
    mysql_select_db("weddingproject",$connection);
    $query1="select userName,password from register where userName='$userName' and password='$password'";
    $result=mysql_query($query1,$connection);
    $number_of_row=mysql_num_rows($result); 
    if($number_of_row == 1)
    {
        echo"<?php
    include('control.php');
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<title>Service Page</title>
<meta charset='utf-8'>
<link rel='stylesheet' href='css/reset.css' type='text/css' media='screen'>
<link rel='stylesheet' href='css/style.css' type='text/css'' media='screen'>
<link rel='stylesheet' href='css/grid.css' type='text/css' media='screen'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]><script src='js/html5.js'></script><![endif]-->
</head>
<body id='page2'>
<!--==============================header=================================-->
<?php
    include('include/menu.php');
?><!--==============================content================================-->
 <a href='links.php'>
     <input class='logOut' type='reset' value='Log Out' font-size='500px'></a><br><br>
<a href='noname6.php'>
     <input class='order' type='submit' value='View Order Form' font-size='500px'></a>
 
 
 <div class='row'>
  <div class='column'>
    <img src='picture/oriental.jpg'  style='width:100%'>
    <a href='venue.php'> Venue information</a>
  </div>
  <div class='column'>
    <img src='picture/mydear.jpg' alt='Forest' style='width:100%'>
    <a href='photo.php'>Photo & video Information</a>
  </div>
  
 </div> 
   <div class='row'>
  <div class='column'>
    <img src='picture/hanlin.jpg' style='width:100%'>
    <a href='floral.php'>Floral Information</a>
  </div>
 <div class='column'>
    <img src='picture/amaramg.jpg'  style='width:100%'>
    <a href='makeup.php'>Make up Information</a>

  </div>
 </div> 
  
  
  <div class='row'>
  <div class='column'>
    <img src='picture/couple1.jpg'  style='width:100%'>
    <a href='dress.php'> Dress information</a>
  </div>
  <div class='column'>
    <img src='picture/couple10.jpg' style='width:100%'>
    </div>
  </div>             

  
  
  <div class='row'>
  <div class='column'>
    <img src='picture/1200.jpg'  style='width:100%'>
    <a href='cards.php'> Invitation Cards information</a>
  </div>
  <div class='column'>
    <img src='picture/g500.jpg' style='width:100%'>
    <a href='gift.php'>Gifts Information</a>
    </div>
  </div>
 
 
   
<!--==============================footer=================================-->
<?php
    include('include/footer.php');
?>
</body>
</html>
";
    
    }
    else echo"<h1>  Your name or password is worng.Please try again!</h1> ";
   
   ?>
</body>
</html>
