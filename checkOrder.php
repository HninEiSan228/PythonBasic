<?php
    echo"
        <style>body{background-image:url('picture/admin.jpg');background-size:cover;background-repeat:no-                   repeat;background-attachment:fixed;padding-top:300px;padding-bottom:300px;padding-left:550px;                padding-right:300px}
               label{color:white;}
        </style>
<body>
       </body>
";
    $host='localhost';
    $user='root';
    $pass='';
    $database='weddingproject';
    $connection=mysql_connect($host,$user,$pass) Or die("Couldn’t connect to database");
    mysql_select_db($database,$connection);
    $query="select * from orderdetail";
    $ret=mysql_query($query,$connection);
   
echo " <table border='1' width='100%' cellingspacing='0' align='center' bgcolor='pink' margin='auto' padding='100px'>

        <tr align='center' bgcolor='#f00058' width='100%'height='100px'>
            <th height='10%'>User Name</th>
            <th width='25%'>Service Name</th> 
             <th width='10%'>Quantity</th>
             <th width='10%'>Price</th>
             <th width='10%'>Total</th>
        </tr> ";
     $noRows=mysql_num_rows($ret);
     $total=0; 
     while($row=mysql_fetch_assoc($ret))
     {    
         echo "<tr>";                                                                                                                                                                                                         
         echo "<td>".$row['userName']."</td>";
         echo "<td>".$row['name']."</td>";
         echo "<td>".$row['quantity']."</td>"; 
         echo "<td>".$row['price']."</td>";
         echo "<td>".$row['total']."</td>";
         echo "</tr>"; 
              }
     
   echo   "</table>";
   echo"<br>";

    echo" <form action='adminpage2.php' method='post'>
            <input type='submit' value='Return'>
        </form>";
    ?>
