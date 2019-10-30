<?php
   $host='localhost';
    $user='root';
    $pass='';
    $database='weddingproject';
   
   
    $name=$_POST['name'];
    
    $connection=mysql_connect($host,$user,$pass) Or die("Couldn’t connect to database");
    
    mysql_select_db($database,$connection);
    
    $query="delete from service where name='$name' and description='photo'";
    mysql_query($query,$connection);
       echo"<script>alert('removed successfully.')</script>";
  
   echo"
        <style>body{background-image:url('picture/admin.jpg');background-size:cover;background-repeat:no-                   repeat;background-attachment:fixed;padding-top:300px;padding-bottom:300px;padding-left:550px;                padding-right:300px}
               label{color:white;}
        </style>
<body>
        <form action='removePhotographer1.php' method='post'>
        <label> Photographer name &nbsp;&nbsp;&nbsp;</label><input type='text' name='name'><br><br>
        <input type='submit' value='remove'>
    </form>
       <form action='adminpage2.php' method='post'>
            <input type='submit' value='Return'>
        </form></body>
";
?>
