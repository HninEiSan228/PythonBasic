<?php
$host='localhost';
    $user='root';
    $pass='';
    $database='weddingproject';
  
    $connection=mysql_connect($host,$user,$pass) Or die("Couldn’t connect to database");
    
    mysql_select_db($database,$connection);
    
    $query="insert into orderDetail(userName,name,quantity,price,total) values('soe','floral',1,10,10)";
    mysql_query($query,$connection);
      
?>
