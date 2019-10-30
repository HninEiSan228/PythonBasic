<?php
    include("links.php");
?>
<?php
    $host='localhost';
    $user='root';
    $pass='';
    $database='weddingproject';
    
    $name=$_POST['name'];
    $password=$_POST['password']; 
    $email=$_POST['email']; 
    $moblie=$_POST['mobile']; 
    $address=$_POST['address']; 
    //$bankacc=$_POST['bankacc'];
    $date=$_POST['date']; 
     $connection=mysql_connect($host,$user,$pass) Or die("Couldn’tconnecttodatabase");
    mysql_select_db($database,$connection);
    $query="insert into register(userName,password,email,phone,address,date) values('$name','$password','$email','$moblie','$address','$date')";
    mysql_query($query,$connection);
?>
?>