<?php
   $host='localhost';
    $user='root';
    $pass='';
    $database='weddingproject';
   
   
    $name=$_POST['name'];
    $price=$_POST['price'];
    
    $connection=mysql_connect($host,$user,$pass) Or die("Couldn’t connect to database");
    
    mysql_select_db($database,$connection);
    
    $query="update service set price=$price where description='floral' AND name='$name' ";
    mysql_query($query,$connection);
    echo"<script>alert('update successful.')</script>";
    echo"
        <style>body{background-image:url('picture/admin.jpg');background-size:cover;background-repeat:no-                   repeat;background-attachment:fixed;padding-top:300px;padding-bottom:300px;padding-left:550px;                padding-right:300px}
               label{color:white;}
        </style>
<body>
        <form action='updateFloralService1.php' method='post'>
     
        <label> Floral service name &nbsp;&nbsp;&nbsp;</label><input type='text' name='name'><br><br>

        <label> Floral service price (new)  &nbsp;&nbsp;&nbsp; </label><input type='text' name='price'> <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &nbsp;&nbsp;&nbsp;&nbsp;
        <input type='submit' value='update'>
    </form>
       <form action='adminpage2.php' method='post'>
            <input type='submit' value='Return'>
        </form></body>
";
?>
