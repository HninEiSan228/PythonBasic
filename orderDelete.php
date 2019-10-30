<?php
 session_start();
?>
<html>
<head>
<style>
a{
    text-decoration:none;
}
.logOut{margin-left: 1000px;width:5%;height:5%;background:#f00058;border:#000                                     solid 1px;
}
</style>
</head>
<?php
    $userName=$_SESSION['userName'];
    $con=mysql_connect('localhost','root','')or die ('Unable to Connect');
    $db='weddingproject';
    $db_selected=mysql_select_db($db,$con);
    $query = "delete from orderdetail where userName='$userName'";
    mysql_query($query,$con);
   
    echo"
   <?php
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
     <input class='logOut' type='reset' value='Log Out' font-size='500px'></a>

<table>

<tr>
<td><img src='picture/oriental.jpg' height='180px'></td>
<td><a href='venue.php'> Venue information</td></tr>
<tr>
<td><img src='picture/mydear.jpg' height='180px'></td>
<td><a href='photo.php'>Photo & video Information</td></tr>
<tr>
<td><img src='picture/hanlin.jpg' height='180px'></td>
<td><a href='floral.php'>Floral Information</td></tr>
<tr>
<td><img src='picture/amaramg.jpg' height='180px'></td>
<td><a href='makeup.php'>Make-up Information</td></tr>
<tr>
<td><img src='picture/couple1.jpg' height='180px'></td>
<td><a href='dress.php'>Dress Information</td></tr>
<tr>
<td><img src='picture/1200.jpg'' height='180px'></td>
<td><a href='cards.php'>Cards Information</td></tr>
<tr>
<td><img src='picture/g500.jpg' height='180px'></td>
<td><a href='gift.php'>gift Information</td></tr>

</table>

             
<!--==============================footer=================================-->
<?php
    include('include/footer.php');
?>
</body>
</html>
";
?>