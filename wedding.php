<?php
    include("control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Service Page</title>
<style>
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
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet" type="text/css">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body id="page2">
<!--==============================header=================================-->
<?php
    include("include/menu.php");
?><!--==============================content================================-->
 
 
 <div class="row">
  <div class="column">
    <img src="picture/oriental.jpg"  style="width:100%">
    <a href="venue1.php"> Venue information</a>
  </div>
  <div class="column">
    <img src="picture/mydear.jpg" alt="Forest" style="width:100%">
    <a href="photo1.php">Photo & video Information</a>
  </div>
  
 </div> 
   <div class="row">
  <div class="column">
    <img src="picture/hanlin.jpg" alt="" style="width:100%">
    <a href="floral1.php">Floral Information</a>
  </div>
 <div class="column">
    <img src="picture/amaramg.jpg"  style="width:100%">
    <a href="makeup1.php">Make up Information</a>

  </div>
 </div>     
  
    <div class="row">
  <div class="column">
    <img src="picture/couple1.jpg" alt="" style="width:100%">
    <a href="dress1.php">Dress information</a>
  </div>
 <div class="column">
    <img src="picture/couple10.jpg" style="width:100%">
    
  </div>
 </div> 
 
  

  
  
  <div class="row">
  <div class="column">
    <img src="picture/1200.jpg"  style="width:100%">
    <a href="cards1.php"> Invitation Cards information</a>
  </div>
  <div class="column">
    <img src="picture/g500.jpg" alt="Forest" style="width:100%">
    <a href="gift1.php">Gifts Information</a>
    </div>
  </div>
  
 
               
<!--==============================footer=================================-->
<?php
    include("include/footer.php");
?>
</body>
</html>
