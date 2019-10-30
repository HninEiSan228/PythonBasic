<?php
 session_start();
?>
<style>
form { bgcolor : "#f00058"};
</style>
<?php
$userName=$_SESSION['userName'];
   $con=mysql_connect('localhost','root','')or die ('Unable to Connect');
$db='weddingproject';
$db_selected=mysql_select_db($db,$con);
$query = "select * from orderdetail where userName='$userName'";
$ret = mysql_query ($query, $con);

echo " <table border='1'  width='50%' cellspacing='0' align='center'>

        <tr align='center' bgcolor='#f00058'>
            <th width='25%'>Service name</th> 
             <th width='25%'>Qty</th>
             <th width='25%'>price</th>
             <th width='25%'>total</th>
        </tr> ";
     $noRows=mysql_num_rows($ret);
     $total=0; 
     while($row=mysql_fetch_assoc($ret))
     {    
         echo "<tr>";                                                                                                                                                                                                         
         echo "<td>".$row['name']."</td>";
         echo "<td>".$row['quantity']."</td>"; 
         echo "<td>".$row['price']."</td>";
         echo "<td>".$row['total']."</td>";
         echo "</tr>"; 
         $price=$row['total'];
         $total+=$price;   
              }
     
   echo   "</table>";
   echo "<h2> Total Amount is $total</h2>";
   echo" <form action='login1.php'><input type='submit' value='choose more'></form>";
    echo" <form action='orderDelete.php'><input type='submit' value='Cancel'></form>";
  
   echo" <form action='index1.php'><input type='submit' value='Comfirm & Log out'></form>";
  ?>