<?php
 session_start();
?>
<?php
    $name=$_GET['action'];
    echo "$name";
  
    $userName=$_SESSION['userName'];
    echo"$userName";
   
    $qty=$_POST['quantity'];
    echo"$qty";
    
    $host='localhost';
    $user='root';
    $pass='';
    $database='weddingproject';
    $connection=mysql_connect($host,$user,$pass) Or die("Couldn’t connect to database");
    mysql_select_db($database,$connection);
    $query="select price from service where name='$name'";
    $ret = mysql_query ($query, $connection); 
    echo"$ret";
  
    
    
    
 ?>