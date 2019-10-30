<?php
  $host='localhost';
    $user='root';
    $pass='';
    $database='weddingproject';
   
   
    $imgName=$_POST['imgName'];
    $name=$_POST['name'];
    $size=$_POST['size'];
    $price=$_POST['price'];
    
    $connection=mysql_connect($host,$user,$pass) Or die("Couldn’t connect to database");
    
    mysql_select_db($database,$connection);
    
    $query="insert into service(img,name,price,size,address,description) values('$imgName','$name',$price,'$size','','dress')";
    mysql_query($query,$connection);
    echo" <script> alert('Uploaded successfully.');</script>";
  

  echo"
        <style>body{background-image:url('picture/admin.jpg');background-size:cover;background-repeat:no-                   repeat;background-attachment:fixed;padding-top:300px;padding-bottom:300px;padding-left:550px;                padding-right:300px}
               label{color:white;}
        </style>
<body>
        <form action='insertDress.php' method='post'>
        <label> Image name &nbsp;&nbsp;&nbsp;</label><input type='text' name='imgName' placeholder='image.jpg'><br><br>

        <label> Dress name &nbsp;&nbsp;&nbsp;</label><input type='text' name='name'><br><br>

        <label> Dress size </label><input type='text' name='size'><br><br>
        <label> venue price   &nbsp;&nbsp;&nbsp; </label><input type='text' name='price'> <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &nbsp;&nbsp;&nbsp;&nbsp;
        <input type='submit' value='add'>
    </form>
       <form action='adminpage2.php' method='post'>
            <input type='submit' value='Return'>
        </form></body>
";
?>
