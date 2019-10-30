<?php
 session_start();
?>
<?php
    $name=$_GET['action'];
    $userName=$_SESSION['userName'];
    $qty=1;

  $con=mysql_connect("localhost","root","")or die ('Unable to Connect');
  $db="weddingproject";
  $db_selected=mysql_select_db($db,$con);
  $query="select price from service where name='$name'";
  $ret = mysql_query ($query, $con); 
  $row=mysql_fetch_array($ret);
  $price=$row["price"];
  
  $total=$price * $qty;
   echo   "<script>
  alert('order successful.');
   </script>";
   
    $query1="insert into orderDetail(userName,name,quantity,price,total) values('$userName','$name',$qty,$price,$total)";
    mysql_query($query1,$con);
    
    echo" <form action='login1.php'><input type='submit' value='choose more'></form>";
    echo " <form action='noname6.php' align='center'><input type='submit' value='View order form'></form>";
  
  ?>